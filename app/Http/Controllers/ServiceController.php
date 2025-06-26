<?php

namespace App\Http\Controllers;
use App\Models\Service; // Assuming you have a Service model
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function webDevelopment()
    {
        return view('service.web-development');
    }
}