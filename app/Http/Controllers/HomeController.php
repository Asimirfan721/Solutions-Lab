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
        'description' => 'Get highly customized Web Applications for your business and make your online profile stand out.',
        'link' => route('services.web')
    ],
    (object)[
        'icon' => '<i class="fas fa-mobile-alt"></i>',
        'title' => 'Mobile Application Development Services',
        'description' => 'Turn your idea into reality with a successful mobile app launch on iOS and Android.',
        'link' => route('services.mobile')
    ],
    (object)[
        'icon' => '<i class="fas fa-film"></i>',
        'title' => 'Animations',
        'description' => 'Bring your ideas to life with stunning 2D/3D animations and motion graphics.',
        'link' => route('services.animation')
    ],
    (object)[
        'icon' => '<i class="fas fa-paint-brush"></i>',
        'title' => 'Graphic Design',
        'description' => 'Creative visual designs for branding, marketing, and digital content.',
        'link' => route('services.graphic')
    ],
    (object)[
        'icon' => '<i class="fas fa-lightbulb"></i>',
        'title' => 'Product Prototyping',
        'description' => 'Transform concepts into interactive prototypes to validate your ideas before launch.',
        'link' => route('services.prototyping')
    ],
    (object)[
        'icon' => '<i class="fas fa-link"></i>',
        'title' => 'Blockchain',
        'description' => 'Secure, decentralized solutions with smart contract and blockchain app development.',
        'link' => route('services.blockchain')
    ],
    (object)[
        'icon' => '<i class="fas fa-cloud"></i>',
        'title' => 'Cloud Development',
        'description' => 'Cloud-native applications for scalable, reliable, and fast digital services.',
        'link' => route('services.cloud')
    ],
    (object)[
        'icon' => '<i class="fas fa-bullhorn"></i>',
        'title' => 'Digital Marketing',
        'description' => 'Results-driven SEO, social media, and content marketing to boost your online reach.',
        'link' => route('services.digital')
    ],
];
    return view('home', compact('services'));
}


}
