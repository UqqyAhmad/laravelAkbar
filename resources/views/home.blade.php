@extends('layouts.app')

@section('content')
    <div class="home-content">
        <!-- Header -->
        <header class="home-header">
            <div class="profile">
                <!-- Uncomment and add image source if you have a profile photo -->
                <!-- <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="profile-photo"> -->
                <h1>Nama Lengkap</h1>
            </div>
            
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h2>Siswa SMK Teknik Komputer dan Jaringan</h2>
                <a href="{{ url('/about') }}" class="cta-button">Pelajari Lebih Lanjut</a>
            </div>
        </section>

        <!-- Tentang Saya (Sekilas) -->
        <section class="about-me">
            <h2>Tentang Saya</h2>
            <p>Saya adalah seorang siswa SMK Teknik Komputer dan Jaringan dengan minat dalam teknologi dan pengembangan perangkat lunak. Saat ini, saya sedang mengeksplorasi berbagai proyek dan tugas yang menantang di bidang ini.</p>
            <p>Kelas: X</p>
            <p>Jurusan: Teknik Komputer dan Jaringan</p>
            <a href="{{ url('/about') }}" class="learn-more">Selengkapnya</a>
        </section>

        <!-- Proyek Unggulan -->
        <section class="featured-projects">
            <h2>Proyek Unggulan</h2>
            <div class="projects">
                <div class="project-item">
                    <img src="{{ asset('images/project1.jpg') }}" alt="Proyek 1">
                    <h3>Proyek 1</h3>
                    <p>Deskripsi singkat tentang proyek 1. <a href="{{ url('/projects/project1') }}">Detail</a></p>
                </div>
                <div class="project-item">
                    <img src="{{ asset('images/project2.jpg') }}" alt="Proyek 2">
                    <h3>Proyek 2</h3>
                    <p>Deskripsi singkat tentang proyek 2. <a href="{{ url('/projects/project2') }}">Detail</a></p>
                </div>
                <!-- Tambahkan lebih banyak proyek jika diperlukan -->
            </div>
        </section>

        <!-- Footer -->
        <footer class="home-footer">
            <div class="social-media">
                <a href="https://www.linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
                <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a>
            </div>
            <p>© 2024 akbar rizki wiji m. All rights reserved.</p>
            <nav class="footer-nav">
                <ul>
                    <li><a href="{{ url('/about') }}">About Me</a></li>
                    <li><a href="{{ url('/projects') }}">Projects</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div>
@endsection
