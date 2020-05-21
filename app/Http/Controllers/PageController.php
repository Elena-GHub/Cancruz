<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Room;

class PageController extends Controller
{
    public function booking()
    {
        $clients = Client::all();
        $rooms = Room::all();
        return view('booking', compact('clients', 'rooms'));
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function cuisine()
    {
        return view('cuisine');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function project()
    {
        return view('project');
    }

    public function about()
    {
        return view('about');
    }

}
