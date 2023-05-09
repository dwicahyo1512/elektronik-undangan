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
}
