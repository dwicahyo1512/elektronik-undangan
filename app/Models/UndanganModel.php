<?php

namespace App\Models;

use CodeIgniter\Model;

class UndanganModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'undangan';
    protected $primaryKey       = 'id_undangan';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $useTimestamps    = true;
    protected $allowedFields    = ['nama_undangan', 'info_undangan',   'id_acara',    'id_contact', 'member_id'];

    protected $validationRules = [
        'id_acara'     => 'required',
        'nama_undangan'        => 'required|min_length[3]',
    ];
    protected $validationMessages = [
        'id_acara' => [
            'required' => 'acara belum dipilih',
        ],
        'nama_undangan' => [
            'required' => 'Nama undangan tidak boleh kosong',
            'min_length' => 'Nama kurang panjang minimal 3 huruf',
        ],
    ];

    function getAll()
    {
        $builder = $this->db->table('undangan');
        $builder->join('contacts', 'contacts.id_contact = undangan.id_contact');
        $query   = $builder->get();
        return $query->getResult();
    }

    function getPaginated($num, $keyword = null)
    {
        $builder = $this->builder();
        $builder->join('acara', 'acara.id_acara = undangan.id_acara');
        if ($keyword != '') {
            $builder->like('nama_undangan', $keyword);
            $builder->orLike('nama_acara', $keyword);
            $builder->orLike('info_acara', $keyword);
        }
        return [
            'undangan' => $this->paginate($num),
            'pager' => $this->pager,
        ];
    }

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

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
