<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function booking()
    {
        return view('booking');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function room()
    {
        return view('room');
    }

    public function cuisine()
    {
        return view('cuisine');
    }
}