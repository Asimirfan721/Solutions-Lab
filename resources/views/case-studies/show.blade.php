@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-red-500 to-orange-500 py-12 text-center text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold mb-4">{{ $caseStudy['title'] ?? 'Case Study' }}</h2>
        <p class="max-w-3xl mx-auto text-lg">{{ $caseStudy['overview'] }}</p>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4 flex flex-col md:flex-row gap-12 items-center">
        <!-- Image -->
        <div class="md:w-1/2 flex justify-center mb-8 md:mb-0">
            <img src="{{ asset('images/' . $caseStudy['image']) }}" alt="Case Study Image" class="rounded-2xl shadow-2xl w-full max-w-md object-cover border-4 border-white">
        </div>
        <!-- Details -->
        <div class="md:w-1/2 space-y-8">
            <!-- Challenges -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-500">
                <h3 class="text-2xl font-bold text-red-600 mb-2">Challenges</h3>
                <p class="text-gray-700">{{ $caseStudy['challenges'] }}</p>
            </div>
            <!-- Solutions -->
            <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-orange-400">
                <h3 class="text-2xl font-bold text-orange-500 mb-2">Solutions</h3>
                <p class="text-gray-700">
                    {{ $caseStudy['solutions'] ?? 'Development has taken care that strong encryption should be used and according to the rules set by HIPAA. The platform was designed in a way which can be used by admins, providers, and patients easily. Team tested everything, using the feedback to make improvements and also made provisions for the simple import and use of diagnostic libraries.' }}
                </p>
            </div>
        </div>
    </div>
    <!-- Results & Tech -->
    <div class="container mx-auto px-4 mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-red-500">
            <h4 class="text-xl font-bold text-red-600 mb-2">Results</h4>
            <p class="text-gray-700 text-center">{{ $caseStudy['results'] ?? 'No results available.' }}</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-orange-400">
            <h4 class="text-xl font-bold text-orange-500 mb-2">Technologies</h4>
            <div class="flex flex-wrap gap-2 justify-center">
                @foreach(($caseStudy['technologies'] ?? ['React js', 'Node js']) as $tech)
                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium shadow">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-gray-400">
            <h4 class="text-xl font-bold text-gray-700 mb-2">Industry & Country</h4>
            <p class="text-gray-700"><span class="font-semibold">Industry:</span> {{ $caseStudy['industry'] ?? 'Health' }}</p>
            <p class="text-gray-700"><span class="font-semibold">Country:</span> {{ $caseStudy['country'] ?? 'United States' }}</p>
        </div>
    </div>
</section>
@endsection
