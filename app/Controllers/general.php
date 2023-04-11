<?php

namespace App\Controllers;

class general extends BaseController
{
    public function index()
    {
        $data['title'] = "Silahkan Login Terlebih Dahulu";
        $data['activeMenu'] = "general";

        echo view('admin_header', $data);
        echo view('general_view', $data);
        echo view('admin_footer');

    }
}
