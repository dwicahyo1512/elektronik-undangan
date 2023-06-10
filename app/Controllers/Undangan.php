<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GroupModel;
use App\Models\ContactModel;
use App\Models\UndanganModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Undangan extends ResourceController
{
    protected $helpers = ['custom'];
    function __construct()
    {
        // untuk acara yang tidak memiliki model
        $this->db      = \Config\Database::connect();
        $this->acara   = $this->db->query("SELECT * FROM acara ");

        // yang mempunyai model
        $this->group = new GroupModel();
        $this->contact = new ContactModel();
        $this->undangan = new UndanganModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->undangan->getPaginated(10, $keyword);
        return view('undangan/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['groups'] = $this->group->findAll();
        $data['contacts'] = $this->contact->findAll();
        $data['acara'] = $this->acara->getResult();
        return view('undangan/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $save = $this->undangan->insert($data);
        if (!$save) {
            return redirect()->back()->withInput()->with('errors', $this->undangan->errors());
        } else {
            return redirect()->to(site_url('undangan'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $undangan = $this->undangan->find($id);
        if (is_object($undangan)) {
            $data['undangan'] = $undangan;
            $data['groups'] = $this->group->findAll();
            return view('undangan/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $save = $this->undangan->update($id, $data);
        if (!$save) {
            return redirect()->back()->withInput()->with('errors', $this->undangan->errors());
        } else {
            return redirect()->to(site_url('undangan'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->undangan->delete($id, true);
        return redirect()->to(site_url('undangan'))->with('success', 'Data Berhasil Dihapus permanent');
        // return redirect()->to(site_url('undangan'))->with('success', 'Data Berhasil DiHapus');
    }

    public function export()
    {
        // $undangan = $this->undangan->findAll();
        $filename = "undangan-" . date('ymd') . ".xlsx";
        $keyword  = $this->request->getGet('keyword');
        $db = \Config\Database::connect();
        $builder = $db->table('undangan');
        $builder->join('groups', 'groups.id_group = undangan.id_group');
        $builder->join('contacts', 'contacts.id_group = undangan.id_group');
        if ($keyword != '') {
            $builder->like('nama_undangan', $keyword);
            $builder->orLike('address', $keyword);
            $builder->orLike('nama_group', $keyword);
            $filename = "undangan-filter-" . date('ymd') . ".xlsx";
        }
        $query =   $builder->get();
        $undangan = $query->getResult();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Alias');
        $sheet->setCellValue('D1', 'Telepon');
        $sheet->setCellValue('E1', 'Email');
        $sheet->setCellValue('F1', 'Alamat');
        $sheet->setCellValue('G1', 'Info');

        $column = 2;
        foreach ($undangan as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value->nama_undangan);
            $sheet->setCellValue('C' . $column, $value->nama_alias);
            $sheet->setCellValue('D' . $column, $value->phone);
            $sheet->setCellValue('E' . $column, $value->email);
            $sheet->setCellValue('F' . $column, $value->address);
            $sheet->setCellValue('G' . $column, $value->info_undangan);
            $column++;
        }
        $sheet->getStyle('A1:G1')->getFont()->setBold(true);
        $sheet->getStyle('A1:G1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('ffff00');

        $styleArray = [
            'borders' => [
                'allborders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => [
                        'rgb' => '000000',
                    ],
                ],
            ],
        ];
        $sheet->getStyle('A1:G' . ($column - 1))->applyFromArray($styleArray);
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename);
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }

    public function import()
    {
        $file = $this->request->getFile('file_excel');
        $ekstension = $file->getClientExtension();
        if ($ekstension == 'xlsx' || $ekstension == 'xls') {
            if ($ekstension == 'xls') {
                $reader = new  \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new  \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $undangan = $spreadsheet->getActiveSheet()->toArray();
            // print_r($undangan);
            foreach ($undangan as $key => $value) {
                if ($key == 0) {
                    continue;
                }
                $data = [
                    'nama_undangan' => $value[1],
                    'nama_alias' => $value[2],
                    'address' => $value[3],
                    'info_undangan' => $value[4],
                    'id_group' => 0
                ];
                $this->undangan->insert($data);
            }
            //  print_r($undangans);
            return redirect()->back()->with('success', 'berhasil import excel');
        } else {
            return redirect()->back()->with('errors', 'Format harus Xlxs atau Xls');
        }
    }
}
