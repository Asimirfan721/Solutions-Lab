@extends('layouts.app')

@section('title', 'Case Studies')

@section('content')
<div class="case-studies-header text-center py-5 bg-primary text-white">
    <h1 class="display-4 font-weight-bold">CASE STUDIES</h1>
</div>

<div class="bg-light py-5">
    <div class="container d-flex flex-column align-items-center">
        <h2 class="mb-2 text-primary font-weight-bold text-center">Case Study</h2>
        <hr class="mb-4 mx-auto" style="width: 60px; border-top: 3px solid #0d6efd; border-radius: 2px;">
        <p class="text-muted mb-5 text-center" style="max-width: 700px;">
            Explore exceptional portfolio to witness their transformative work in action, encompassing groundbreaking web and mobile applications, bespoke software development, and captivating digital experiences that push the boundaries of technology and drive business success.
        </p>

        <div class="d-flex flex-column align-items-center w-100" style="max-width: 600px; margin: 0 auto;">
            <!-- CraveShare -->
            <div class="card shadow rounded-lg border-0 mb-5 w-100 transition-card">
                <img src="{{ asset('images/craveshare.png') }}" class="card-img-top rounded-top" alt="CraveShare">
                <div class="card-body text-center">
                    <span class="badge bg-primary mb-2">Web Application</span>
                    <h5 class="card-title text-primary">CraveShare</h5>
                    <p class="card-text">
                        The EMR system (Electronic Medical Record) was designed for a change in the management of mental health care.
                    </p>
                    <a href="#" class="btn btn-warning btn-lg font-weight-bold shadow-sm px-4">View Case Study</a>
                </div>
            </div>

            <!-- HRP -->
            <div class="card shadow rounded-lg border-0 w-100 transition-card">
                <img src="{{ asset('images/hrp.png') }}" class="card-img-top rounded-top" alt="Headache Relief Program">
                <div class="card-body text-center">
                    <span class="badge bg-primary mb-2">Mobile Application</span>
                    <h5 class="card-title text-primary">Headache Relief Program (HRP)</h5>
                    <p class="card-text">
                        Headaches and migraines are very common, affecting millions of sufferers across the world. It often results in missed workdays and affects daily life and productivity.
                    </p>
                    <a href="#" class="btn btn-warning btn-lg font-weight-bold shadow-sm px-4">View Case Study</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.transition-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.transition-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 8px 32px rgba(13,110,253,0.15);
}
.btn-warning {
    background: #ffc107;
    color: #212529;
    border: none;
}
.btn-warning:hover, .btn-warning:focus {
    background: #ffb300;
    color: #212529;
    box-shadow: 0 0 10px rgba(255, 179, 0, 0.5);
}
</style>
@endsection
