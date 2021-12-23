<?php

namespace App\Controllers;

use App\Models\DataModel;

class Data extends BaseController
{
    protected $dataModel;

    public function __construct()
    {
        $this->dataModel = new DataModel();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->dataModel->getMahasiswa()
        ];

        return view('pages/data/index', $data);
    }

    public function create()
    {
        return view('pages/data/create');
    }

    public function save()
    {
        $data = [
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan'),
            'prodi' => $this->request->getVar('prodi')
        ];

        $this->dataModel->insert($data);

        return redirect()->to('data/index');
    }
}
