<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function contact(){
        echo 'working here...';
    }
    public function about(){
        $data = [
           'myarray'=>[
            'key'=>'value',
            'integer'=>1,
            'array'=>[1,2,3,4],
            'assoc'=>['key'=>'value']
           ]
        ];
        return  view('about/home',$data);
        //return view('about',$data);
    }
}
