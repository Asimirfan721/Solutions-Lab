@extends('layouts.app')

@section('title', 'Product Prototyping Services')

@section('content')
<section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center" style="background-image: url('/images/product-prototyping.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white drop-shadow-lg"> Product-Prototyping</h1>
        <p class="text-lg text-white max-w-2xl mx-auto drop-shadow">
           Got your next product blueprint ready? Let’s transform your idea into reality with precision and innovation.
        </p>
    </div>
</section>


        <!-- How We Work -->
        <div class="bg-white p-8 rounded-lg shadow mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 alignment text-center" style= "font-family: 'Times New Roman', Times, serif">How We Deliver the Best</h2>
            <p class="text-gray-700 mb-3 text-center" style="font-family: 'Times New Roman', serif; font-size: 24px;">
                Our experienced design and development team crafts efficient, measurable product prototypes with exceptional speed and accuracy.
                From ideation to launch, we handle every detail—design, functionality, testing, and final execution—ensuring nothing is left behind.
               With precision and clarity, our process guides you to pitch your product confidently, identify risks, and develop a full-functional prototype.
               We use alpha/beta testing, clickable wireframes, and functional prototypes to help you see the full picture before launch.
            </p>
        </div>

        <!-- Services Offered -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Our Prototyping Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
                @foreach([
                    ['title' => 'Efficient MVP', 'desc' => 'We build MVPs that are funding-ready and stable.'],
                    ['title' => 'Quick Prototypes', 'desc' => 'Rapid iterations that save time and reduce risk.'],
                    ['title' => 'Dependability Guaranteed', 'desc' => 'Identify and fix performance issues early.'],
                    ['title' => 'Investor-Ready Prototypes', 'desc' => 'Present functional demos to attract stakeholders.']
                ] as $service)
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <h4 class="text-red-600 text-lg font-semibold mb-2">{{ $service['title'] }}</h4>
                    <p class="text-gray-700">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tools Section -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Our Tools of the Trade</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center text-gray-700 style">
                @foreach([
                    'Mobile Technologies', 'UI/UX', 'Web & Hybrid',
                    'Backend & Database', 'Cloud & Push Notification', 'App Analytics & Payments'
                ] as $tool)
                <div class="bg-white p-4 rounded shadow hover:shadow-md transition">{{ $tool }}</div>
                @endforeach
            </div>
        </div>

        <!-- Technology Stack -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Technologies We Use</h3>
            <div class="flex flex-wrap gap-4 text-center   text-gray-700 justify-center">
                @foreach(['React Native', 'Ionic', 'Flutter', 'Swift', 'Kotlin'] as $tech)
                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full shadow text-sm font-medium">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">FAQs</h2>
            <div class="space-y-6 text-gray-700">
                <div>
                    <p class="font-semibold text-center">What is product prototyping development?</p>
                    <p class="text-center">It involves creating a model or sample of a product to test its concept, functionality, and design before production.</p>
                </div>
                <div>
                    <p class="font-semibold">What are the benefits of prototyping?</p>
                    <p>It reduces development risk, improves design accuracy, saves time and cost, and enhances investor confidence.</p>
                </div>
                <div>
                    <p class="font-semibold">What types of prototypes can you create?</p>
                    <p>Alpha and beta versions, clickable wireframes, visual mockups, and fully functional models.</p>
                </div>
                <div>
                    <p class="font-semibold">How long does a prototype take to build?</p>
                    <p>Depending on complexity, it may take a few days to a few weeks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
