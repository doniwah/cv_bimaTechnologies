<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV BIMA TECHNOLOGIES')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}">CV BIMA<span>TECHNOLOGIES</span></a>
        </div>

        <nav>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('project') }}" class="{{ request()->routeIs('project') ? 'active' : '' }}">Project</a>
            <a href="{{ route('kerjasama') }}" class="{{ request()->routeIs('kerjasama') ? 'active' : '' }}">Kerja Sama</a>
            <a href="{{ route('organisasi') }}" class="{{ request()->routeIs('organisasi') ? 'active' : '' }}">Organisasi</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            
            @if(request()->routeIs('home'))
                <a href="{{ route('login') }}" class="login-nav">Login</a>
            @endif
        </nav>
    </header>

    <!-- ================= MAIN CONTENT ================= -->
    <main>
        @yield('content')
    </main>

    <!-- ================= FOOTER ================= -->
    <footer>
        CV BIMA TECHNOLOGIES
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
