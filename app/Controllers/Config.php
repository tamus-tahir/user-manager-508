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
            'config' => $this->configModel->get(),
            'validation' => \Config\Services::validation()
        ];

        return view('config/index', $data);
    }

    public function update()
    {
        $rules = [
            'appname' => ['rules' => 'required', 'errors' => ['required' => 'App name is required']],
            'copyright' => ['rules' => 'required', 'errors' => ['required' => 'copyright is required']],
            'keywords' => ['rules' => 'required', 'errors' => ['required' => 'keywords is required']],
            'author' => ['rules' => 'required', 'errors' => ['required' => 'author is required']],
            'description' => ['rules' => 'required', 'errors' => ['required' => 'description is required']],
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'Data gagal disimpan');
            return redirect()->to('config')->withInput();
        }

        $data = [
            'id_config' => 1,
            'appname' => $this->request->getVar('appname'),
            'copyright' => $this->request->getVar('copyright'),
            'keywords' => $this->request->getVar('keywords'),
            'author' => $this->request->getVar('author'),
            'description' => $this->request->getVar('description'),
        ];

        $this->configModel->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('config');
    }
}
