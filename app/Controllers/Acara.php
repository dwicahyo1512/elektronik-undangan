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
        $data['title'] = 'Acara';
        return view('acara/get', $data);
        // print_r($query);
    }

    public function create()
    {
        $data['title'] = 'Acara';
        return view('acara/add', $data );
    }

    public function store()
    {
        $validation =  \Config\Services::validation();
        $isValid = $this->validate([
            'nama_acara' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama acara tidak boleh kosong',
                    'min_length' => 'Nama kurang panjang minimal 3 huruf',
                ],
            ],
            'date_acara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'tanggal tidak boleh kosong',
                ],
            ],
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        //cara 1 : name nya sama
        $data = $this->request->getPost();
        // cara 2 : name spesific
        // $data = [
        //     'nama_acara' => $this->request->getVar('nama_acara'),
        //     'date_acara' => $this->request->getVar('date_acara'),
        //     'info_acara' => $this->request->getVar('info_acara'),
        // ];

        $this->db->table('acara')->insert($data);
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('acara')->getWhere(['id_acara' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['title'] = 'Acara';
                $data['acara'] = $query->getRow();
                // print_r($data);
                return view('acara/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id = null)
    {
        $validation =  \Config\Services::validation();
        $isValid = $this->validate([
            'nama_acara' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama acara tidak boleh kosong',
                    'min_length' => 'Nama kurang panjang minimal 3 huruf',
                ],
            ],
            'date_acara' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'tanggal tidak boleh kosong',
                ],
            ],
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        //cara 1 :sesuai name   
        $data = $this->request->getPost();
        unset($data['_method']);

        // cara 2 : name spesific
        // $data = [
        //     'nama_acara' => $this->request->getVar('nama_acara'),
        //     'date_acara' => $this->request->getVar('date_acara'),
        //     'info_acara' => $this->request->getVar('info_acara'),
        // ];

        $this->db->table('acara')->where(['id_acara' => $id])->update($data);
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('acara')->where(['id_acara' => $id])->delete();
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Dihapus');
    }
}
