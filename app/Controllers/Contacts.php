<?php

namespace App\Controllers;

use App\Database\Seeds\Contact;
use CodeIgniter\RESTful\ResourceController;
use App\Models\GrpModel;
use App\Models\ContactModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Contacts extends ResourceController
{
    protected $helpers = ['custom'];
    function __construct()
    {
        $this->grp = new GrpModel;
        $this->contact = new ContactModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->contact->getPaginated(10, $keyword);
        return view('contact/index', $data);

        // $keyword = $this->request->getGet('keyword');
        // $data = $this->contact->getPaginated(10, $keyword);
        // $data['keyword'] = $keyword;
        // return view('contact/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        return view('contact/show');
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['grp'] = $this->grp->findAll();
        return view('contact/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $save = $this->contact->insert($data);
        if (!$save) {
            return redirect()->back()->withInput()->with('errors', $this->contact->errors());
        } else {
            return redirect()->to(site_url('contacts'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $contact = $this->contact->find($id);
        if (is_object($contact)) {
            $data['contact'] = $contact;
            $data['grp'] = $this->grp->findAll();
            return view('contact/edit', $data);
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
        $save = $this->contact->update($id, $data);
        if (!$save) {
            return redirect()->back()->withInput()->with('errors', $this->contact->errors());
        } else {
            return redirect()->to(site_url('contacts'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->contact->delete($id, true);
        return redirect()->to(site_url('contacts'))->with('success', 'Data Berhasil Dihapus permanent');
        // return redirect()->to(site_url('contacts'))->with('success', 'Data Berhasil DiHapus');
    }

    public function export()
    {
        // $contacts = $this->contact->findAll();
        $filename = "contacts-" . date('ymd') . ".xlsx";
        $keyword  = $this->request->getGet('keyword');
        $db = \Config\Database::connect();
        $builder = $db->table('contacts');
        $builder->join('grp', 'grp.id_grp = contacts.id_grp');
        if ($keyword != '') {
            $builder->like('nama_contact', $keyword);
            $builder->orLike('nama_alias', $keyword);
            $builder->orLike('address', $keyword);
            $builder->orLike('phone', $keyword);
            $builder->orLike('email', $keyword);
            $builder->orLike('nama_grp', $keyword);
            $filename = "contacts-filter-" . date('ymd') . ".xlsx";
        }
        $query =   $builder->get();
        $contacts = $query->getResult();

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
        foreach ($contacts as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value->nama_contact);
            $sheet->setCellValue('C' . $column, $value->nama_alias);
            $sheet->setCellValue('D' . $column, $value->phone);
            $sheet->setCellValue('E' . $column, $value->email);
            $sheet->setCellValue('F' . $column, $value->address);
            $sheet->setCellValue('G' . $column, $value->info_contact);
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
            $contacts = $spreadsheet->getActiveSheet()->toArray();
            // print_r($contacts);
            foreach ($contacts as $key => $value) {
                if ($key == 0) {
                    continue;
                }
                $data = [
                    'nama_contact' => $value[1],
                    'nama_alias' => $value[2],
                    'phone' => $value[3],
                    'email' => $value[4],
                    'address' => $value[5],
                    'info_contact' => $value[6],
                    'id_grp' => 0
                ];
                $this->contact->insert($data);
            }
            //  print_r($contacts);
            return redirect()->back()->with('success', 'berhasil import excel');
        } else {
            return redirect()->back()->with('errors', 'Format harus Xlxs atau Xls');
        }
    }
}
