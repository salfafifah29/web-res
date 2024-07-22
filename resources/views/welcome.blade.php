<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restaurant</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/restyle.css') }}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <div class="header-logo">
                    <img src="{{ asset('image/logo sushi.png') }}" alt="logo sushi">
                    <h1>SUSHI SHO</h1>
                </div>
            </div>
            <div class="auth-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </header>

    <main class="mt-6">
        <section id="home" class="home">
            <div class="history">
                <img src="{{ asset('image/sushi png (3).png') }}" alt="sushi png (3)">
                <h2>SUSHI SHO</h2>
                <p>Sushi adalah hidangan khas Jepang yang terdiri dari nasi yang dibentuk dengan tangan dan disajikan dengan berbagai macam bahan, seperti potongan ikan segar, seafood, telur, atau sayuran.</p>
                <p>keunikan sushi terletak pada kombinasi rasa yang seimbang antara nasi yang asam dan tekstur serta cita rasa bahan-bahan lainnya. Teknik penyajian yang cermat dan estetika visual yang indah menjadi ciri khas dalam menyajikan sushi.
                sushi maki yang dibungkus dengan nori hingga nigiri yang elegan, setiap gigitan sushi mengundang sensasi rasa yang memikat dan pengalaman kuliner yang memuaskan.</p>
            </div>
        </section>
                
        <section id="about" class="about">
            <div class="about">
                <img src="{{ asset('image/restoran (6).jpeg') }}" alt="">
                <h2>RESTAURANT</h2>
                <p>Sushi Sho, didirikan pada tahun 2004, memanjakan lidah dengan hidangan sushi otentik yang terinspirasi dari tradisi Edo-mae dan Kansai. Koki utama kita menghadirkan sushi lezat dengan bahan segar berkualitas tinggi. Restoran ini menawarkan suasana hangat dan intim, cocok untuk menikmati hidangan bersama orang terkasih.</p>
                <p>Sushi Sho buka dari Senin hingga Sabtu, 10:00-15:30 dan 16:00-23:30. Tutup pada hari Minggu. Kunjungi situs web nya untuk informasi lebih lanjut dan reservasi.</p>
            </div>
        </section>
    </main>
    <footer>
    <p>&copy; 2024 Sushi SHO|Salma Afifah & Eka Safitri.</p>
    </footer>
</body>
</html>