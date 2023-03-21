<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function menu()
    {
        return view('menu');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function tableReservation()
    {
        return view('table-reservation');
    }
    public function roomReservation()
    {
        return view('room-reservation');
    }
}
