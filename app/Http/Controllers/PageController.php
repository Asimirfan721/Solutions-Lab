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

public function careers()
{
    // Static data for simplicity — replace with DB data if needed
    $jobs = [
        [
            'title' => 'Vue.js & Laravel Developer',
            'level' => 'Expert',
            'description' => 'Instant Solutions Lab is looking for a highly skilled Vue.js & Laravel Developer to collaborate with a team of designers and developers to create web applications.',
        ],
        [
            'title' => '2D/3D Animator',
            'level' => 'Mid Level',
            'description' => 'We are looking for a Mid-level 2D/3D Animator for our Karachi office.',
        ],
    ];

    return view('careers', compact('jobs'));
}


}
