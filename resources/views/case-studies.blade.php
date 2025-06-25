@extends('layouts.app') <!-- Or your actual layout -->

@section('title', 'Case Studies')

@section('content')
<div class="case-studies-header text-center py-5 bg-light">
    <h1 class="display-4">CASE STUDIES</h1>
</div>

<div class="container py-5">
    <h2 class="mb-4">Case Study</h2>
    <p class="text-muted">
        Explore exceptional portfolio to witness their transformative work in action, encompassing groundbreaking web and mobile applications, bespoke software development, and captivating digital experiences that push the boundaries of technology and drive business success
    </p>

    <div class="row mt-5">
        <!-- CraveShare -->
        <div class="col-md-6 mb-5">
            <div class="card shadow">
                <img src="{{ asset('images/craveshare.png') }}" class="card-img-top" alt="CraveShare">
                <div class="card-body">
                    <span class="badge bg-danger mb-2">Web Application</span>
                    <h5 class="card-title">CraveShare</h5>
                    <p class="card-text">
                        The EMR system (Electronic Medical Record) was designed for a change in the management of mental health care.
                    </p>
                    <a href="#" class="btn btn-danger">View Case Study</a>
                </div>
            </div>
        </div>

        <!-- HRP -->
        <div class="col-md-6 mb-5">
            <div class="card shadow">
                <img src="{{ asset('images/hrp.png') }}" class="card-img-top" alt="Headache Relief Program">
                <div class="card-body">
                    <span class="badge bg-danger mb-2">Mobile Application</span>
                    <h5 class="card-title">Headache Relief Program (HRP)</h5>
                    <p class="card-text">
                        Headaches and migraines are very common, affecting millions of sufferers across the world. It often results in missed workdays and affects daily life and productivity.
                    </p>
                    <a href="#" class="btn btn-danger">View Case Study</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
