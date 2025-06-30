@extends('layouts.app')

@section('content')
<div class="container py-12">
    <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition duration-300">
        <img src="{{ asset('images/hrp.png') }}" alt="HRP" class="w-full h-56 object-cover">
        <div class="p-6 text-center">
            <span class="text-sm font-medium text-white bg-red-600 px-3 py-1 rounded-full">Mobile Application</span>
            <h3 class="text-2xl font-bold mt-4 text-gray-800">Headache Relief Program (HRP)</h3>
            <p class="text-gray-600 mt-4 leading-relaxed">
                The Headache Relief Program is a mobile solution designed to support millions who suffer from chronic migraines. 
                It offers digital therapy, real-time tracking of symptoms, and personalized analytics to monitor progress.
                Users can log triggers, receive behavioral guidance, and connect with professionals through the app.
                <br><br>
                The app's intuitive design ensures accessibility for users of all ages and backgrounds, making it an essential tool 
                in healthcare’s digital transformation.
            </p>
        </div>
    </div>
</div>
@endsection
