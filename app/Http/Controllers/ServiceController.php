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
    public function mobileAppDevelopment()
{
    return view('service.mobile-app-development');
}
public function animation()
{
    return view('service.animation');
}
public function graphicDesign()
{
    return view('service.graphic-design');
}
public function productPrototyping()
{
    return view('service.product-prototyping');
}
public function blockchain()
{
    return view('service.blockchain');
}

public function cloudComputing()
{
    return view('service.cloud-computing');
}

}