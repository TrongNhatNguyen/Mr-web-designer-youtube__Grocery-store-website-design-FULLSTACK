<?php

namespace App\Controllers\FRONT_END;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [];

        // khai báo 2 dòng này để dùng được: <?= $this->extend,section,.. ?.> ở Views
        $path = APPPATH . 'views/FRONT_END/';
        $view = \Config\Services::renderer($path, null, false);
        return $view->setData($data)->render('home_view');
    }
}
