<?php

namespace App\Controllers;

class Legal extends BaseController
{
    public function privacy(): string
    {
        return view('legal/privacy', [
            'seo' => \Config\Seo::for('privacy'),
            'body_class' => 'page-legal',
        ]);
    }

    public function terms(): string
    {
        return view('legal/terms', [
            'seo' => \Config\Seo::for('terms'),
            'body_class' => 'page-legal',
        ]);
    }
}
