<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CV BIMA TECHNOLOGIES</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- ================= NAVBAR ================= -->
    <header class="navbar">
        <div class="logo">
            <a href="{{ route('home') }}">CV BIMA<span>TECHNOLOGIES</span></a>
        </div>

        <nav>
            <a href="{{ route('home') }}">Home</a>
        </nav>
    </header>

    <!-- ================= LOGIN ================= -->
    <main class="login-page">
        <div class="login-box">
            <span class="label">COMPANY LOGIN</span>
            <h1>Selamat Datang</h1>
            <p>Login untuk mengakses sistem internal CV BIMA TECHNOLOGIES.</p>

            <form id="loginForm">
                @csrf
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" autocomplete="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" autocomplete="current-password" required>

                <button type="submit" class="btn login-button">Login</button>
            </form>

            <div id="loginMessage" class="login-message"></div>

            <!-- DEMO LOGIN -->
            <div class="login-info">
                <strong>Akun Demo</strong>
                <p>Username: <b>admin</b></p>
                <p>Password: <b>12345</b></p>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
