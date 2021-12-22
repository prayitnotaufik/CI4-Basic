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

        return view('pages/data', $data);
    }
}
