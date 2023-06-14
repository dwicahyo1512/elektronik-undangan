<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table            = 'contacts';
    protected $primaryKey       = 'id_contact';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;
    protected $allowedFields    = ['nama_contact', 'nama_alias',    'phone',    'email',    'address',    'info_contact',    'id_grp'];

    protected $validationRules = [
        'id_grp'     => 'required',
        'nama_contact'        => 'required|min_length[3]',
    ];
    protected $validationMessages = [
        'id_grp' => [
            'required' => 'Grup belum dipilih',
        ],
        'nama_contact' => [
            'required' => 'Nama contact tidak boleh kosong',
            'min_length' => 'Nama kurang panjang minimal 3 huruf',
        ],
    ];

    function getAll()
    {
        $builder = $this->db->table('contacts');
        $builder->join('grps', 'grps.id_grp = contacts.id_grp');
        $query   = $builder->get();
        return $query->getResult();
    }

    function getPaginated($num, $keyword = null)
    {
        $builder = $this->builder();
        $builder->join('grps', 'grps.id_grp = contacts.id_grp');
        if ($keyword != '') {
            $builder->like('nama_contact' , $keyword);
            $builder->orLike('nama_alias' , $keyword);
            $builder->orLike('address' , $keyword);
            $builder->orLike('phone' , $keyword);
            $builder->orLike('email' , $keyword);
            $builder->orLike('nama_grp' , $keyword);
        }
        return [
            'contacts' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }
    // protected $DBGroup          = 'default';
    // protected $useAutoIncrement = true;
    // protected $protectFields    = true;
    // // Dates
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
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
