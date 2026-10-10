<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard - CV BIMA TECHNOLOGIES')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>

<body>
    <!-- ================= NAVBAR DASHBOARD ================= -->
    <header class="navbar dashboard-navbar">
        <div class="logo">
            <a href="{{ route('dashboard') }}">CV BIMA<span>TECHNOLOGIES</span></a>
        </div>

        <nav>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('dashboard.dokumen') }}" class="{{ request()->routeIs('dashboard.dokumen') ? 'active' : '' }}">Dokumen</a>
            <a href="{{ route('home') }}" class="website-link">← Website</a>

            <button type="button" class="btn btn-small logout-button" onclick="logout()">
                Logout
            </button>
        </nav>
    </header>

    <!-- ================= MAIN CONTENT ================= -->
    @yield('content')

    <footer>
        CV BIMA TECHNOLOGIES
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
