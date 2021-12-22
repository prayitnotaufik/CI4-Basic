<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFileds = ['nim', 'nama', 'jurusan', 'prodi'];

    public function getMahasiswa($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
