<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index()
    {
        // dd(auth()->user()->hasRole('patient'));
        return view('index');
    }
    
    public function oldindex()
    {
        // dd(auth()->user()->hasRole('doctor'));
        return view('oldindex');
    }
}
