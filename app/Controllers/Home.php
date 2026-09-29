<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index', ['seo' => \Config\Seo::for('home')]);
    }
}
