@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="text-center py-5 bg-light">
    <h1 class="display-4">CONTACT US</h1>
</div>

<div class="container py-5">
    <div class="row">
        <!-- Form Section -->
        <div class="col-md-7">
            <h3>Let's Connect</h3>
            <p class="text-danger fw-bold">We'd Love to Hear From You, <br> Let's Get In Touch!</p>

            <form action="#" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name *" required>
                    </div>
                    <div class="col">
                        <input type="text" name="company_name" class="form-control" placeholder="Company Name *" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input type="email" name="email" class="form-control" placeholder="Email *" required>
                    </div>
                    <div class="col">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number *" required>
                    </div>
                </div>

                <div class="mb-3">
                    <textarea name="project_details" rows="5" class="form-control" placeholder="Details about your project *" required></textarea>
                </div>

                <button type="submit" class="btn btn-danger w-100">Talk To US</button>
            </form>
        </div>

        <!-- Contact Info Section -->
        <div class="col-md-5 ps-md-5 mt-5 mt-md-0">
            <h5>Pakistan Address</h5>
            <p>
                C-43, Tipu Sultan Cooperative Housing Society, Opposite Malir Cantt Check Post No.6, Karachi, Pakistan.<br>
                <i class="bi bi-telephone-fill"></i> +92-21-34027771<br>
                <i class="bi bi-envelope-fill"></i> info@instantsolutionslab.com
            </p>

            <h5 class="mt-4">United States of America Address</h5>
            <p>
                804 South Hamilton Street, Suite 110, Saginaw, Michigan, 48602<br>
                <i class="bi bi-telephone-fill"></i> +1-913-358-5807<br>
                <i class="bi bi-envelope-fill"></i> info@instantsolutionslab.com
            </p>
        </div>
    </div>
</div>
@endsection
