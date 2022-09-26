<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = 'home';

        return view('main',$data);
    }
}
