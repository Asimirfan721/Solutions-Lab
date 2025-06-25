@extends('layouts.app') <!-- Update to match your layout -->

@section('title', 'Careers')

@section('content')
<div class="text-center py-5 bg-light">
    <h1 class="display-4">CAREERS</h1>
</div>

<div class="container py-5">
    <h2 class="text-center mb-5">Open Positions</h2>
    
    <div class="row">
        @foreach($jobs as $job)
        <div class="col-md-6 mb-4 d-flex align-items-stretch">
            <div class="w-100 d-flex border-end pe-4">
                <div class="w-50 pe-3 text-end">
                    <h5><strong>{{ $job['title'] }}</strong></h5>
                    <small class="text-danger">{{ $job['level'] }}</small>
                </div>
                <div class="w-50 ps-3 border-start">
                    <h5><strong>{{ $job['title'] }}</strong></h5>
                    <p>{{ $job['description'] }}</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-danger btn-sm">SEE DETAILS</a>
                        <a href="#" class="btn btn-danger btn-sm">APPLY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
