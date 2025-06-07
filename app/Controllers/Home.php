<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo "Welcome to CodeIgniter 4! index function";
        return view('welcome_message');
    }

    public function helloWorld(): string
    {
        echo "Hello, World! function in the Home Controller ";
        return view('welcome_message');
    }
}
