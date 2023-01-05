<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index($arg,$two)
    {
        echo $arg;
        echo '<br>';
        echo $two;
        dd();
        echo 'working contact index method.';
        dd();
        $data['mydata'] = 'welcome in php';
        $data['myarray'] = [1,2,3];
        return view('home',$data);
    }
}
