<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Omar Swerih | Web Developer')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <a href="{{ route('home') }}" class="logo">Omar Swerih</a>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('home') }}#about">About</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('home') }}#contact">Contact</a>
            <a href="{{ route('skills') }}#skills">Skills</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2026 Omar Swerih. Built with Laravel.</p>
    </footer>

</body>
</html>
