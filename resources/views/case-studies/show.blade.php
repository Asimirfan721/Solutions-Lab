@extends('layouts.app')

@section('content')
<section class="text-white bg-gradient-to-r from-red-500 to-orange-500 py-10 text-center">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Overview</h2>
        <p class="max-w-4xl mx-auto">{{ $caseStudy['overview'] }}</p>
    </div>
</section>

<section class="py-10 bg-white text-black">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <img src="{{ asset('images/' . $caseStudy['image']) }}" alt="Case Study Image" class="rounded-lg shadow">
        </div>
        <div class="md:w-1/2">
            <h3 class="text-2xl font-bold mb-4">Challenges</h3>
            <p>{{ $caseStudy['challenges'] }}</p>
        </div>
    </div>
</section>
@endsection
