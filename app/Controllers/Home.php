<?php

// Dibuat oleh : Nurtyasto Hadi

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
}