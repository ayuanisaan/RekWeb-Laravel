<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Ayu']);
    }
}