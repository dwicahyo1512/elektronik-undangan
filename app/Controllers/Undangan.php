<?php

namespace App\Controllers;

use CodeIgniter\Database\ConnectionInterface;
use App\Database\Seeds\Contact;
use CodeIgniter\RESTful\ResourceController;
use App\Models\GrpsModel;
use App\Models\UndanganModel;
use App\Models\UndanganContactModel;
use App\Models\ContactModel;
use Config\Database;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Undangan extends ResourceController
{
    protected $helpers = ['custom'];
    protected $undangan, $acara, $contact, $grp, $db;
    function __construct()
    {
        $this->db = Database::connect();

        $this->undangan = new UndanganModel();
        $this->contact = new ContactModel();
        $this->grp = new GrpsModel();
        $this->acara = db_connect()->table('acara')->get()->getResult();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        // $member_id = $this->undangan->find($id);
        // $data['contacts'] =  $this->contact->select('contact.*, grps.*, contact.created_at as tgl_contact')
        // ->where('id_undangan', $id)
        // ->getAll();
        $keyword = $this->request->getGet('keyword');
        $data = $this->undangan->getPaginated(10, $keyword);
        $data['title'] = 'Undangan';
        return view('undangan/index', $data);

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
        $undangan = $this->undangan->find($id);
        if (is_object($undangan)) {
            $data['contacts'] =  $this->contact->select('contact.*, grps.*, contact.created_at as tgl_contact')
            ->where('id_undangan', $id)
            ->getAll();
            $data['title'] = 'show Contact';
            return view('undangan/show', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->contact->getPaginated(10, $keyword);
        $data['keyword'] = $keyword;
        $data['acara'] = $this->acara;
        $data['title'] = 'Add Undang';
        return view('undangan/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        // lakukan validasi
        $rules = $this->undangan->validationRules;

        // cek ada validasi tidak 
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $memberId = $this->request->getPost('member_id') ?? NULL;
        $data = [
            'id_acara' => $this->request->getPost('id_acara'),
            'nama_undangan' => $this->request->getPost('nama_undangan'),
            'info_undangan' => $this->request->getPost('info_undangan'),
            'member_id' => $memberId
        ];
        // print_r($data);
        // die;
        if (!$this->undangan->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->undangan->errors());
        }

        $id_undangan = $this->undangan->getInsertID();
        $UndanganContactModel = new UndanganContactModel();

        if ($this->request->getPost('id_contact') !== null) {
            $id_contact = count($this->request->getPost('id_contact'));
            // print_r($id_contact);
            // die;

            for ($i = 0; $i < $id_contact; $i++) {
                $id_contacts = $this->request->getPost('id_contact[' . $i . ']');
                $datas[$i] = array(
                    'id_undangan' => $id_undangan,
                    'id_contact' => $id_contacts
                );
                // print_r($data[$i]);
                // die;
                if (!$UndanganContactModel->save($datas[$i])) {
                    return redirect()->back()->withInput()->with('errors', $UndanganContactModel->errors());
                }
            }
        }

        // print_r($data);
        // die;

        // $save = $this->undangan->insert($data);
        if (!$data) {
            return redirect()->back()->withInput()->with('errors', $this->undangan->errors());
        } else {
            return redirect()->to(site_url('user/undangan'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->undangan->delete($id, true);
        return redirect()->to(site_url('user/undangan'))->with('success', 'Data Berhasil Dihapus permanent');
    }

    public function export()
    {
    }

    public function import()
    {
    }
}
