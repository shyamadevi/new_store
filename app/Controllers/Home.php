<?php

namespace App\Controllers;

class Home extends BaseController
{
      public function index()
    {
        return view('user/navbar'). view('user/index'). view('user/footer');
    }
}
