<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $services = [
        (object)[
            'icon' => '<i class="fas fa-code"></i>',
            'title' => 'Web Application Development Services',
            'description' => 'Get highly customized Web Applications for your business and make your online profile stand out.'
        ],
        (object)[
            'icon' => '<i class="fas fa-mobile-alt"></i>',
            'title' => 'Mobile Application Development Services',
            'description' => 'Turn your idea into reality with a successful app launch.'
        ],
        // Add more services here...
    ];

    return view('home', compact('services'));
}

}
