@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-black text-white py-16 md:py-24">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-red-500 text-lg md:text-xl font-semibold mb-3 md:mb-4 tracking-wide uppercase">Where Ingenuity Meets Renovation</h3>
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
            We Take Care of your <br>
            <span class="text-red-600">App Development</span><br>
            Digital Needs
        </h1>
        <div class="mt-8 flex flex-col md:flex-row justify-center gap-4">
            <a href="/contact-us" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition">
                LET’S TURN  INTO REALITY
            </a>
            <a href="#" class="bg-white hover:bg-gray-100 text-black font-bold py-3 px-8 rounded-full shadow-lg border border-gray-200 transition">
                READY TO TALK BUSINESS?
            </a>
        </div>
    </div>

    <!-- Social Sidebar -->
    <div class="fixed top-1/3 right-0 z-50 flex flex-col items-center space-y-3">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded transition">
            <i class="fab fa-facebook-f text-black"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded transition">
            <i class="fab fa-linkedin-in text-black"></i>
        </a>
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded transition">
            <i class="fab fa-youtube text-black"></i>
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="bg-white p-2 shadow hover:bg-gray-100 rounded transition">
            <i class="fab fa-instagram text-black"></i>
        </a>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-center text-red-600 text-lg font-semibold mb-2 tracking-wide uppercase">Comprehensive Digital Solution</h2>
        <h3 class="text-center text-3xl md:text-4xl font-bold mb-12">Where Ingenuity Meets Renovation</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($services as $service)
            <div class="bg-white border border-gray-100 p-8 rounded-xl shadow hover:shadow-xl transition flex flex-col items-center text-center">
                <div class="text-4xl text-red-600 mb-4">
                    {!! $service->icon !!}
                </div>
                <h4 class="font-bold text-lg mb-2">{{ $service->title }}</h4>
                <p class="text-gray-600 text-sm mb-4">{{ $service->description }}</p>
                <a href="{{ $service->link }}" class="text-white bg-red-600 hover:bg-red-700 font-semibold px-5 py-2 rounded-full shadow transition mt-auto">Learn More</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="container mx-auto px-6 md:px-12 max-w-4xl">
        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-red-600 mb-2">A Promise We Make Is A Promise We Keep</h2>
            <p class="text-gray-600 text-lg">We deliver on our commitments, ensuring your digital journey is seamless and successful.</p>
        </div>

        <!-- Why Choose Us -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Why Choose the Best Digital Marketing Agency?</h3>
            <p class="text-gray-700 leading-relaxed">
                The world is digitalizing, and staying updated with trends has become a survival skill for any business.
                To opt for prestigious services in the digital market, one must make wise decisions.
                The <strong>Instant Solutions Lab</strong> team checks all the marks when it comes to providing quality, quantity, and on-time delivery.
            </p>
        </div>

        <!-- What We Offer -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">What Can a Digital Services Company Offer?</h3>
            <p class="text-gray-700 leading-relaxed">
                Maintaining our position among the top tiers, we've made our presence known in application and website development.
                Our smooth service delivery has earned us global recognition.
                From medical to engineering industries, our professionals have served a wide range of sectors.
            </p>
        </div>

        <!-- What Sets Us Apart -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">What Makes Instant Solutions Lab a Cut Above the Rest?</h3>
            <p class="text-gray-700 leading-relaxed">
                Being one of the <strong>Best Digital Services Companies</strong>, we’ve pioneered development strategies that deliver real results.
                Our customized plans enable us to exceed expectations and ensure 100% project success while boosting our clients' ROI.
            </p>
        </div>

        <!-- Our Work Approach -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Working as a Digital Solutions Company</h3>
            <p class="text-gray-700 leading-relaxed">
                At Instant Solutions Lab, we believe that no project is impossible. Dedication and attention to detail define our process.
                Each project passes through rigorous internal quality checks, ensuring only top-tier output.
            </p>
        </div>

        <!-- Our Mission -->
        <div class="mb-10">
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Your Success Is Our Accomplishment</h3>
            <p class="text-gray-700 leading-relaxed">
                Climbing the ladder of success is tough, but with the right support, even the hardest paths become achievable.
                Whether you're a startup or scaling your next big idea, we stand ready to help nurture and grow your vision into reality.
            </p>
        </div>

        <!-- Portfolio Insight -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-3">The Domain of Our Vast Portfolio</h3>
            <p class="text-gray-700 leading-relaxed">>
                Take a look into our past. We cherish our strategy and how it gracefully flows through our workstream — pause, rewind, and play.
            </p>
        </div>
    </div>
</section>

<!-- Example FAQ Section -->
<div class="bg-white rounded-lg shadow-md p-6 md:p-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">FAQs</h2>

    <div x-data="{ open: false }" class="mb-4 border-b pb-4">
        <button @click="open = !open" class="flex items-center justify-between w-full text-left text-gray-800 font-semibold focus:outline-none">
            <span>What is Web Application Development?</span>
            <svg :class="{'rotate-180': open}" class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="open" x-transition class="mt-3 text-gray-700">
            Web application development is the process of creating software that runs in web browsers.
            It includes planning, coding, testing, and deployment of interactive, dynamic, and functional platforms
            for businesses and users alike.
        </div>
    </div>

    <!-- Repeat for more questions -->
    <div x-data="{ open: false }" class="mb-4 border-b pb-4">
        <button @click="open = !open" class="flex items-center justify-between w-full text-left text-gray-800 font-semibold focus:outline-none">
            <span>Another Question?</span>
            <svg :class="{'rotate-180': open}" class="w-5 h-5 ml-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
        <div x-show="open" x-transition class="mt-3 text-gray-700">
            Your answer goes here.
        </div>
    </div>
</div>

<!-- Chat Button -->
<div class="fixed bottom-6 right-6 z-50">
    <button class="bg-red-600 hover:bg-red-700 text-white p-4 rounded-full shadow-lg transition">
        <i class="fas fa-comments"></i>
    </button>
</div>
@endsection
