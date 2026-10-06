<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index(): string
    {
        return view('services', [
            'seo' => \Config\Seo::for('services'),
            'body_class' => 'page-services',
        ]);
    }
}
