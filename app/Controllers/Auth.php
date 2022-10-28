<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/template/header'). 
        view('auth/pages/login'). 
        view('auth/template/footer');
    }
}