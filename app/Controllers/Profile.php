<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        //cara 1 : query builder
        $builder = $this->db->table('users');
        $query = $builder->where('id_user', userLogin()->id_user )->get();

        //cara 2 :query manual
        // $query = $this->db->query("SELECT * FROM users ");

        $data['users'] = $query->getResult();
        // print_r($data);
        return view('Profile/index', $data);
    }

    public function update()
    {
        $validation =  \Config\Services::validation();
        $isValid = $this->validate([
            'nama_panggilan' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama user tidak boleh kosong',
                    'min_length' => 'Nama kurang panjang minimal 3 huruf',
                ],
            ],
            'nama_lengkap' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong',
                ],
            ],
            'email_user' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'email tidak boleh kosong',
                ],
            ],
            'phone' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'nomer telpon tidak boleh kosong',
                ],
            ],
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        //cara 1 :sesuai name   
        $data = $this->request->getPost();
        $save = $this->db->table('users')->where(['id_user' => userLogin()->id_user])->update($data);
        if ($save){
            return redirect()->to(site_url('profile'))->with('success', 'profile Berhasil di update');
        }
     }
}
