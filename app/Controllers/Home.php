<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('common/head').
                view('common/menu').
                view('welcome_message').
                view('common/footer');
    }
}
