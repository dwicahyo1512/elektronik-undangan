<?php

namespace App\Models;

use CodeIgniter\Model;

class UndanganContactModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'undangan_contact';
    protected $primaryKey       = 'id_udangan_contact';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_udangan_contact', 'id_undangan', 'id_contact', 'created_at', 'updated_at', 'id_member'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = false;

    // Validation
    protected $validationRules      = [
        'id_undangan' => [
            'label' => 'ID undangan',
            'rules' => 'required'
        ],
        'id_contact' => [
            'label' => 'Contact',
            'rules' => 'required',
            'errors' => 'Contact harus dipilih.',
        ],
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
