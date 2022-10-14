<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('templates/header') .
        view('pages/home').
        view('templates/footer');
    }
}
