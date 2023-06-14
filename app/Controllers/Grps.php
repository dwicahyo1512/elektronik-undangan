<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourcePresenter;
use App\Models\GrpsModel;


class Grps extends ResourcePresenter
{
    // function __construct()
    // {
    //     $this->grp = new grpModel();
    // }

    protected $modelName = 'App\Models\GrpsModel';
    protected $helpers = ['custom'];
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    public function index()
    {
        $data['title'] = "Group";
        $data['grps'] = $this->model->findAll();
        return view('grp/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        $data['title'] = "Group";
        return view('grp/new', $data);
        //
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $validation =  \Config\Services::validation();
        $isValid = $this->validate([
            'nama_grp' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Grup tidak boleh kosong',
                    'min_length' => 'Nama kurang panjang minimal 3 huruf',
                ],
            ],
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        
        //cara 1 : name nya sama
        $data = $this->request->getPost();
        $this->model->insert($data);
        return redirect()->to(site_url('user/grps'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $grp  = $this->model->where('id_grp', $id)->first();
        if (is_object($grp)) {
            $data['grp'] = $grp;
            $data['title']='Edit Group';
            return view('grp/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validation =  \Config\Services::validation();
        $isValid = $this->validate([
            'nama_grp' => [
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => 'Nama Grup tidak boleh kosong',
                    'min_length' => 'Nama kurang panjang minimal 3 huruf',
                ],
            ],
        ]);
        if (!$isValid) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        //cara 1 : name nya sama
        $data = $this->request->getPost();
        $this->model->update($id, $data);
        return redirect()->to(site_url('user/grps'))->with('success', 'Data Berhasil Diupdate');
        //
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        // $this->model->where('id_grp', $id)->delete();
        $this->model->delete($id);
        return redirect()->to(site_url('user/grps'))->with('success', 'Data Berhasil DiHapus');
        //
    }
    public function trash()
    {
        $data['grp'] = $this->model->onlyDeleted()->findAll();
        return view('user/grp/trash', $data);
    }

    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) {
            $this->db->table('grp')
                ->set('deleted_at', null, true)
                ->where(['id_grp' => $id])
                ->update();
        } else {
            $this->db->table('grp')
                ->set('deleted_at', null, true)
                ->where('deleted_at is NOT NULL', NULL, FALSE)
                ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('grps'))->with('success', 'Data Berhasil Direstore');
        }
    }

    public function delete2($id = null)
    {
        if ($id != null) {
            $this->model->delete($id, true);
            return redirect()->to(site_url('user/grps/trash'))->with('success', 'Data Berhasil Dihapus permanent');
        } else {
            $this->model->purgeDeleted();
            return redirect()->to(site_url('user/grps/trash'))->with('success', 'Data Trash Berhasil dihapus permanent');
        }
    }
}
