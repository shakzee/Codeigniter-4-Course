<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data['mydata'] = 'welcome in php';
        $data['myarray'] = [1,2,3];
        return view('home',$data);
    }
}
