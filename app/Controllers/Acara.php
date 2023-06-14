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
        // Tampilkan view step 1
        return view('acara/wizard/step1', $data);
    }

    public function step2()
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
        // Simpan data dari step 1
        $data = [
            'nama_acara' => $this->request->getVar('nama_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
        ];
        $data['title'] = 'Acara';
        session()->set('step1Data', $data);
        return view('acara/wizard/step2', $data);
    }

    public function step3()
    {
        // Dapatkan data dari step 1
        $step1Data = session()->get('step1Data');

        // Simpan data dari step 2
        $data = array_merge($step1Data, $this->request->getPost());
        $data['title'] = 'Acara';
        session()->set('step2Data', $data);
        return view('acara/wizard/step3', $data);
    }


    public function store()
    {
        //cara 1 : name nya sama
        $data = $this->request->getPost();
        $step2Data = session('step2Data');

        if (isset($step2Data['icon-input'])) {
            if ($step2Data['icon-input'] === 'nikah') {
                $acaraData = [
                    'jenis_acara' => 'nikah',
                    'nama_acara' => $this->request->getVar('nama_acara'),
                    'date_acara' => $this->request->getVar('date_acara'),
                    'info_acara' => $this->request->getVar('info_acara'),
                    // tambahkan atribut-atribut lain yang diperlukan
                ];
                $this->db->table('acara')->insert($acaraData);
                $acaraId = $this->db->insertID();
                $nikahData = [
                    'id_acara' => $acaraId,
                    'nama_pria' => $this->request->getVar('nama_pria'),
                    'nama_wanita' => $this->request->getVar('nama_wanita'),
                    // tambahkan atribut-atribut lain yang diperlukan
                ];
                $this->db->table('nikah')->insert($nikahData);
                if ($this->db->affectedRows() > 0) {
                    return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
                }
            } elseif ($step2Data['icon-input'] === 'party') {
                $acaraData = [
                    'jenis_acara' => 'party',
                    'nama_acara' => $this->request->getVar('nama_acara'),
                    'date_acara' => $this->request->getVar('date_acara'),
                    'info_acara' => $this->request->getVar('info_acara'),
                    // tambahkan atribut-atribut lain yang diperlukan
                ];
                $this->db->table('acara')->insert($acaraData);
                $acaraId = $this->db->insertID();
                $partyData = [
                    'id_acara' => $acaraId,
                    'party' => $this->request->getVar('party'),
                    'pembuat_party' => $this->request->getVar('pembuat_party'),
                    // tambahkan atribut-atribut lain yang diperlukan
                ];
                $this->db->table('party')->insert($partyData);
                if ($this->db->affectedRows() > 0) {
                    return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
                }
            }
        }
        return redirect()->to(site_url('acara'))->with('error', 'Test masih dalam pengembangan');
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('acara')
                ->join('nikah', 'acara.id_acara = nikah.id_acara', 'left')
                ->join('party', 'acara.id_acara = party.id_acara', 'left')
                ->where('acara.id_acara', $id)
                ->get();
            if ($query->resultID->num_rows > 0) {
                $data['title'] = 'Acara';
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data);
                // print_r($data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }


    public function update($id = null)
    {
        $validation = \Config\Services::validation();
        $isValid = $this->validate([
            'nama_acara' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required'   => 'Nama acara tidak boleh kosong',
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

        $data = $this->request->getPost();
        // $id = $data['id_acara'];
        $jenisAcaraBaru = $this->request->getVar('icon-input');
        $jenisAcaraSebelumnya = $this->db->table('acara')->select('jenis_acara')->where('id_acara', $id)->get()->getRow()->jenis_acara;
    //    print_r($data);
    //     print_r($jenisAcaraBaru);
    //     print_r($jenisAcaraSebelumnya);
        if ($jenisAcaraBaru !== $jenisAcaraSebelumnya) {
            if ($jenisAcaraSebelumnya === 'nikah') {
                $this->db->table('nikah')->where(['id_acara' => $id])->delete();
            } elseif ($jenisAcaraSebelumnya === 'party') {
                $this->db->table('party')->where(['id_acara' => $id])->delete();
            }
        }

        if ($jenisAcaraBaru === 'nikah') {
            $nikahData = [
                'id_acara'    => $id,
                'nama_pria'   => $this->request->getVar('nama_pria'),
                'nama_wanita' => $this->request->getVar('nama_wanita'),
                // tambahkan atribut-atribut lain yang diperlukan
            ];

            $this->db->table('nikah')->insert($nikahData);
            if ($this->db->affectedRows() === 0) {
                return redirect()->back()->withInput()->with('errors', $this->db->table('nikah')->errors());
            }
        } elseif ($jenisAcaraBaru === 'party') {
            $partyData = [
                'id_acara'       => $id,
                'party'          => $this->request->getVar('party'),
                'pembuat_party'  => $this->request->getVar('pembuat_party'),
                // tambahkan atribut-atribut lain yang diperlukan
            ];

            $this->db->table('party')->insert($partyData);
            if ($this->db->affectedRows() === 0) {
                return redirect()->back()->withInput()->with('errors', $this->db->table('party')->errors());
            }
        }
        $acaraData = [
            'jenis_acara' => $jenisAcaraBaru,
            'nama_acara' => $this->request->getVar('nama_acara'),
            'date_acara' => $this->request->getVar('date_acara'),
            'info_acara' => $this->request->getVar('info_acara'),
            // tambahkan atribut-atribut lain yang diperlukan
        ];

        if (!$this->db->table('acara')->where('id_acara', $id)->update($acaraData)) {
            return redirect()->back()->withInput()->with('errors', $this->db->table('acara')->errors());
        }
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $this->db->table('acara')->where(['id_acara' => $id])->delete();
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Dihapus');
    }
}
