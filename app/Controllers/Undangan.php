<?php

namespace App\Controllers;

use App\Database\Seeds\Contact;
use CodeIgniter\RESTful\ResourceController;
use App\Models\GrpsModel;
use App\Models\ContactModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Undangan extends ResourceController
{
    protected $helpers = ['custom'];
    function __construct()
    {
        $this->grp = new GrpsModel;
        $this->contact = new ContactModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['title'] = 'Undang';
        return view('undangan/index', $data);
        // $keyword = $this->request->getGet('keyword');
        // $data = $this->contact->getPaginated(10, $keyword);

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
    
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
       
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
      
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
      
    }

    public function export()
    {
       
    }

    public function import()
    {
        
    }
}
