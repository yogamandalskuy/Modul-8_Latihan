<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $icon = 'bi bi-house-fill';

        return view('home', ['pageTitle' => $pageTitle, 'icon' => $icon]);
    }
}
