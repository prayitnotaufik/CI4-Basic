<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFields = ['nim', 'nama', 'jurusan', 'prodi'];
    protected $useTimestamps = true;

    public function getMahasiswa($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
