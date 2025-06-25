<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about-us'); // This should match the filename in /resources/views/
    } 
    public function index()
{
    return view('case-studies');
}

}
