<?php

namespace App\Http\Controllers;

use App\Train;

class PageController extends Controller
{
    function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
