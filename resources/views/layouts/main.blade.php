<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Tasks System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Tasks Manager</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ url('/') }}">Today's Tasks</a>
                <a class="nav-link" href="{{ url('/tasks') }}">All Tasks</a>
                <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center py-4 text-muted mt-5 border-top">
        <small>IT0049 Technical Summative Assessment 3 &copy; {{ date('Y') }}</small>
    </footer>
</body>
</html>