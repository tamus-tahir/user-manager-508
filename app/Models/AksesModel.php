<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table      = 'tabel_akses';
    protected $primaryKey = 'id_akses';
    protected $allowedFields = ['id_navigasi', 'id_profil'];
    protected $useTimestamps = true;
    protected $createdField  = 'akses_created_at';
    protected $updatedField  = 'akses_updated_at';

    public function getAksesProfil($id_profil)
    {
        return $this->where(['id_profil' => $id_profil])->findAll();
    }
}
