<?php

namespace App\Models;

use CodeIgniter\Model;


class GrpModel extends Model
{
    // protected $DBgrp          = 'default';
    protected $table            = 'grps';
    protected $primaryKey       = 'id_grp';
    protected $returnType        = 'object';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['nama_grp', 'info_grp'];
    // protected $useAutoIncrement = true;
    // protected $protectFields    = true;

    // Dates
    protected $useTimestamps = true;
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
