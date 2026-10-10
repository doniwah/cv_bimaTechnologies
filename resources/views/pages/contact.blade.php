@extends('layouts.app')

@section('title', 'Contact - CV BIMA TECHNOLOGIES')

@section('content')
    <!-- HEADER -->
    <section class="page-header">
        <span class="label">CONTACT US</span>
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu dan berdiskusi dengan Anda.</p>
    </section>

    <!-- CONTACT SECTION -->
    <section class="section contact-grid">
        <!-- CONTACT PERSON & OFFICE -->
        <div>
            <span class="label">CONTACT PERSON</span>
            <h2>Mari Terhubung</h2>

            <div class="contact-person">
                <h3>CV. BIMA TECHNOLOGIES</h3>
                <p>Customer Relations</p>
                <p>📧 cv.bimatechnologies@gmail.com</p>
                <p>📞 0822-3224-8889</p>
                <p>💬 WhatsApp</p>
            </div>

            <div class="contact-person">
                <h3>Office</h3>
                <p>
                    Komplek Karimata Square Blok B1, Jl. Karimata, Gumuk Kerang, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121
                </p>
                <p>Indonesia</p>
            </div>
        </div>

        <!-- FORM -->
        <div class="contact-form">
            <h2>Kirim Pesan</h2>

            <form id="contactForm" method="POST" action="#">
                @csrf
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required placeholder="Nama lengkap">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="email@example.com">

                <label for="subject">Subjek</label>
                <input type="text" id="subject" name="subject" placeholder="Subjek pesan">

                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="6" required placeholder="Tulis pesan Anda..."></textarea>

                <button type="submit" class="btn">Kirim Pesan</button>
            </form>

            <div id="contactMessage"></div>
        </div>
    </section>
@endsection
