<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function consultancy()
    {
        return view('pages.consultancy');
    }

    public function research()
    {
        return view('pages.research');
    }

    public function donate()
    {
        return view('pages.donate');
    }

    public function payments()
    {
        return view('pages.payments');
    }
}
