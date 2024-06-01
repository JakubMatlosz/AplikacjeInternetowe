<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome to Our Courses')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343A40;
        }
        .navbar-brand, .nav-link, .footer {
            color: white;
        }
        .footer {
            background-color: #343A40;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .course-card .card-header {
            background-color: #343A40;
            color: white;
        }
        .course-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .course-card .card-title {
            margin-bottom: 0;
        }
        .course-card .btn {
            margin-top: auto;
        }
        .navbar-nav .nav-item form {
            display: inline;
        }
        .navbar-nav .nav-item form button {
            background: none;
            border: none;
            color: white;
            padding: 0;
            cursor: pointer;
            font-size: 1rem;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table .btn {
            margin: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">Our Courses</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/teachers">Teachers</a>
                </li>
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link mt-2">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
