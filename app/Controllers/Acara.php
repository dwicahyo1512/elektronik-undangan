<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index()
    {
        //cara 1 : query builder
        $builder = $this->db->table('acara');
        $query   = $builder->get();

        //cara 2 :query manual
        // $query = $this->db->query("SELECT * FROM acara ");

        $data['acara'] = $query->getResult();
        return view('acara/get', $data);
        // print_r($query);
    }

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
        //cara 1 : name nya sama
        // $data = $this->request->getPost();
        // cara 2 : name spesific
        $data = [
            'nama_acara' => $this->request->getVar('nama_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];

        $this->db->table('acara')->insert($data);
        if ($this->db->affectedRows() > 0) {
               return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
        }
    }

       public function edit($id = null)
    {
        if($id != null){
          $query = $this->db->table('acara')->getWhere(['id_acara' => $id]);
          if($query->resultID->num_rows > 0){
            $data['acara'] = $query->getRow();
        print_r($data);
            // return view('acara/edit', $data);
          }
        }else{
             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
