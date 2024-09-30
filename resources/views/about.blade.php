@extends('layouts.app')

@section('content')
    <div class="about-content">
        <!-- Header -->
        <header class="about-header">
            <h1>Tentang Saya</h1>
 
        </header>

        <!-- Biografi Singkat -->
        <section class="biography">
            <h2>Biografi Singkat</h2>
            <div class="bio-info">
                <img src="{{ asset('images/profile.jpg') }}" alt="Foto Diri" class="bio-photo">
                <p>Saya adalah seorang siswa SMK Teknik Komputer dan Jaringan dengan latar belakang yang kuat dalam teknologi dan pengembangan perangkat lunak. Saya saat ini sedang mempelajari berbagai aspek teknik jaringan dan pemrograman. Saya juga memiliki pengalaman dalam desain grafis dan pembuatan aplikasi.</p>
            </div>
        </section>

        <!-- Keterampilan dan Keahlian -->
        <section class="skills">
            <h2>Keterampilan dan Keahlian</h2>
            <ul>
                <li>Pemrograman (Java, Python, C++)</li>
                <li>Desain Grafis (Photoshop, Illustrator)</li>
                <li>Teknik Jaringan (Cisco, LAN/WAN)</li>
                <li>Proyek dan Pelatihan Tambahan:</li>
                <li>Pengembangan Web</li>
                <li>Pelatihan Jaringan Cisco</li>
            </ul>
        </section>

        <!-- Tujuan dan Aspirasi -->
        <section class="goals">
            <h2>Tujuan dan Aspirasi</h2>
            <p>Di masa depan, saya ingin menjadi seorang ahli jaringan atau pengembang perangkat lunak yang terampil, dengan fokus pada teknologi terbaru dan inovasi. Saya bersemangat untuk mengejar peluang yang dapat memperluas pengetahuan dan keterampilan saya di bidang ini.</p>
        </section>

        <!-- Footer -->
        <footer class="about-footer">
            <div class="social-media">
                <a href="https://www.linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
                <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a>
            </div>
            
            <nav class="footer-nav">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Me</a></li>
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div>
@endsection
