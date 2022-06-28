<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class PageController extends Controller
{
    public function index(){

        $trains = Train::get();
        return view('home', compact('trains'));
    }

    public function about(){

        return view('about');
    }
}
