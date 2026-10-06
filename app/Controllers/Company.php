<?php

namespace App\Controllers;

class Company extends BaseController
{
    public function about(): string
    {
        return view('company/about', [
            'seo' => \Config\Seo::for('about'),
            'body_class' => 'page-company',
        ]);
    }

    public function careers(): string
    {
        return view('company/careers', [
            'seo' => \Config\Seo::for('careers'),
            'body_class' => 'page-company',
        ]);
    }
}
