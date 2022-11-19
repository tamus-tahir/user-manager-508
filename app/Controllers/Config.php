<?php

namespace App\Controllers;

use \App\Models\ConfigModel;

class Config extends BaseController
{

    protected $configModel;

    public function __construct()
    {
        $this->configModel = new ConfigModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Config',
            'config' => $this->configModel->get()
        ];

        return view('config/index', $data);
    }
}
