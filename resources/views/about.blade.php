@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white py-3">
                <h2 class="h5 mb-0">About the Developer</h2>
            </div>
            <div class="card-body">
                <h4 class="card-title text-primary">{{ $developer['name'] }}</h4>
                <p class="card-text text-muted">{{ $developer['section'] }} | {{ $developer['course'] }}</p>
                <hr>
                <p>This web application was built for Technical Summative Assessment 3 (TSA3) using the Laravel framework, Eloquent ORM, database migrations, seeders, and Blade templating.</p>
            </div>
        </div>
    </div>
</div>
@endsection