@extends('layouts.app')

@section('content')
    <div class="projects-content">
        <!-- Header -->
        
        <!-- Galeri Proyek -->
        <section class="projects-gallery">
            <h2>Galeri Proyek</h2>
            <div class="projects-grid">
                <div class="project-item">
                    <img src="{{ asset('images/project1-thumbnail.jpg') }}" alt="Proyek 1">
                    <h3>Proyek 1</h3>
                    <p>Deskripsi singkat tentang Proyek 1, termasuk tujuan, proses, dan hasil. <a href="{{ url('/projects/project1') }}">Detail</a></p>
                </div>
                <div class="project-item">
                    <img src="{{ asset('images/project2-thumbnail.jpg') }}" alt="Proyek 2">
                    <h3>Proyek 2</h3>
                    <p>Deskripsi singkat tentang Proyek 2, termasuk tujuan, proses, dan hasil. <a href="{{ url('/projects/project2') }}">Detail</a></p>
                </div>
                <!-- Tambahkan lebih banyak proyek jika diperlukan -->
            </div>
        </section>

        <!-- Footer -->
        <footer class="projects-footer">
            <div class="social-media">
                <a href="https://www.linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
                <a href="https://www.instagram.com/yourprofile" target="_blank">Instagram</a>
            </div>
            <p>© 2024 Nama Lengkap. All rights reserved.</p>
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
