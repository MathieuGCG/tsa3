@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white py-3">
                <h2 class="h5 mb-0">Demo User Profile</h2>
            </div>
            <div class="card-body">
                @if ($user)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>User ID:</strong> {{ $user->id }}</li>
                        <li class="list-group-item"><strong>Username:</strong> {{ $user->username }}</li>
                        <li class="list-group-item"><strong>Full Name:</strong> {{ $user->full_name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Account Created:</strong> {{ $user->created_at }}</li>
                    </ul>
                @else
                    <p class="text-danger mb-0">No user record found in database.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection