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
            'description' => 'Turn your idea into reality with a successful mobile app launch on iOS and Android.'
        ],
        (object)[
            'icon' => '<i class="fas fa-film"></i>',
            'title' => 'Animations',
            'description' => 'Bring your ideas to life with stunning 2D/3D animations and motion graphics.'
        ],
        (object)[
            'icon' => '<i class="fas fa-paint-brush"></i>',
            'title' => 'Graphic Design',
            'description' => 'Creative visual designs for branding, marketing, and digital content.'
        ],
        (object)[
            'icon' => '<i class="fas fa-lightbulb"></i>',
            'title' => 'Product Prototyping',
            'description' => 'Transform concepts into interactive prototypes to validate your ideas before launch.'
        ],
        (object)[
            'icon' => '<i class="fas fa-link"></i>',
            'title' => 'Blockchain',
            'description' => 'Secure, decentralized solutions with smart contract and blockchain app development.'
        ],
        (object)[
            'icon' => '<i class="fas fa-cloud"></i>',
            'title' => 'Cloud Development',
            'description' => 'Cloud-native applications for scalable, reliable, and fast digital services.'
        ],
        (object)[
            'icon' => '<i class="fas fa-bullhorn"></i>',
            'title' => 'Digital Marketing',
            'description' => 'Results-driven SEO, social media, and content marketing to boost your online reach.'
        ],
    ];

    return view('home', compact('services'));
}


}
