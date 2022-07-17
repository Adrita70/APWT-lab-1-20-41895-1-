<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {   
        return view('layout.home');
    }
    function contact()
    {
        return view('layout.contact');
    }
    function about()
    {
        return view('layout.about');
    }
    function ourteams()
    {
        return view('layout.ourteams');
    }
}
