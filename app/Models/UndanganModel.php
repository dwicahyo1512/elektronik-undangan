<?php

namespace App\Models;

use CodeIgniter\Model;

class UndanganModel extends Model
{
    // protected $DBGroup          = 'default';
    // protected $useAutoIncrement = true;
    protected $table            = 'undangan';
    protected $primaryKey       = 'id_undangan';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_undangan', 'address', 'info_undangan', 'id_group', 'id_contact', 'id_acara'];
    
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    //validation
    protected $validationRules = [
        'id_group'     => 'required',
        'nama_undangan'        => 'required|min_length[3]',
    ];
    protected $validationMessages = [
        'id_group' => [
            'required' => 'Grup belum dipilih',
        ],
        'nama_undangan' => [
            'required' => 'Nama undangan tidak boleh kosong',
            'min_length' => 'Nama kurang panjang minimal 3 huruf',
        ],
    ];

// join table
    function getAll()
    {
        $builder = $this->db->table('undangan');
        $builder->join('groups', 'groups.id_group = undangan.id_group');
        $builder->join('contacts', 'contacts.id_contact = undangan.id_contact');
        $builder->join('acara', 'acara.id_acara = undangan.id_acara');
        $query   = $builder->get();
        return $query->getResult();
    }

    // pagination
    function getPaginated($num, $keyword = null)
    {
        $builder = $this->builder();
        $builder->join('groups', 'groups.id_group = undangan.id_group');
        if ($keyword != '') {
            $builder->like('nama_undangan', $keyword);
            $builder->orLike('address', $keyword);
        }
        return [
            'undangan' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

   

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
