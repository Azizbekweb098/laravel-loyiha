<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitrController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function media()
    {
        return view('media');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function mediaD()
    {
        return view('mediaD');
    }
}
