<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comic Project</title>
    <style>
        /* Comic Book Style CSS */
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #ffcc00;
            padding: 10px 0;
            border-bottom: 10px solid #333;
            box-shadow: 0 8px 6px -6px black;
            text-shadow: 2px 2px #fff;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo h1 {
            font-size: 2.5rem;
            margin: 0;
            color: #333;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 4px 4px #ff0000;
        }

        .navbar {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            margin: 0 15px;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 8px 15px;
            border: 2px solid #333;
            background-color: #ffcc00;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .navbar a:hover {
            background-color: #ff0000;
            color: #fff;
            border-color: #ff0000;
            transform: scale(1.1);
        }

        .home-content {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            border: 10px solid #333;
            box-shadow: 10px 10px 0 #ffcc00;
            margin: 50px 10%;
        }

        .home-content h2 {
            font-size: 3rem;
            margin: 0;
            text-transform: uppercase;
            color: #333;
            text-shadow: 4px 4px #ff0000;
        }

        .home-content p {
            font-size: 1.4rem;
            color: #555;
        }

        .home-content img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border: 5px solid #333;
        }

        footer {
            background-color: #ffcc00;
            color: #333;
            text-align: center;
            padding: 15px;
            border-top: 10px solid #333;
            text-shadow: 2px 2px #fff;
        }

        footer p {
            margin: 0;
        }

        
    /* Comic Book Style CSS */
    /* ... (previous CSS styles) ... */

    .home-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #ffcc00;
        padding: 10px 20px;
        border-bottom: 10px solid #333;
    }

    .profile {
        display: flex;
        align-items: center;
    }

    .profile-photo {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .home-navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .home-navbar li {
        margin: 0 15px;
    }

    .home-navbar a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        padding: 8px 15px;
        border: 2px solid #333;
        background-color: #ffcc00;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .home-navbar a:hover {
        background-color: #ff0000;
        color: #fff;
        border-color: #ff0000;
        transform: scale(1.1);
    }

    .hero {
        background-image: url('{{ asset('images/hero-bg.jpg') }}');
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 100px 0;
        text-align: center;
    }

    .hero-content h2 {
        font-size: 3rem;
        margin: 0;
        text-shadow: 4px 4px #ff0000;
    }

    .cta-button {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        padding: 10px 20px;
        border-radius: 5px;
        margin-top: 20px;
        transition: background-color 0.3s;
    }

    .cta-button:hover {
        background-color: #ff0000;
    }

    .about-me {
        text-align: center;
        padding: 50px 20px;
        background-color: #fff;
        border: 5px solid #333;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .learn-more {
        display: inline-block;
        text-decoration: none;
        color: #ff0000;
        font-weight: bold;
        margin-top: 20px;
    }

    .featured-projects {
        padding: 50px 20px;
        background-color: #fff;
    }

    .projects {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .project-item {
        width: 30%;
        margin-bottom: 20px;
        text-align: center;
    }

    .project-item img {
        max-width: 100%;
        height: auto;
        border: 3px solid #333;
        border-radius: 5px;
    }

    .home-footer {
        background-color: #ffcc00;
        color: #333;
        text-align: center;
        padding: 15px;
        border-top: 10px solid #333;
        box-shadow: 0 -8px 6px -6px black;
    }

    .social-media a {
        margin: 0 10px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .footer-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .footer-nav li {
        margin: 0 15px;
    }

    .footer-nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .about-header {
        background-color: #ffcc00;
        padding: 10px 0;
        border-bottom: 10px solid #333;
        box-shadow: 0 8px 6px -6px black;
        text-shadow: 2px 2px #fff;
    }

    .about-navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .about-navbar li {
        margin: 0 15px;
    }

    .about-navbar a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        padding: 8px 15px;
        border: 2px solid #333;
        background-color: #ffcc00;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .about-navbar a:hover {
        background-color: #ff0000;
        color: #fff;
        border-color: #ff0000;
        transform: scale(1.1);
    }

    .biography {
        text-align: center;
        padding: 50px 20px;
        background-color: #fff;
        border: 5px solid #333;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .bio-info {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .bio-photo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 20px;
        border: 3px solid #333;
    }

    .skills {
        padding: 50px 20px;
        background-color: #fff;
    }

    .skills ul {
        list-style: none;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    .skills li {
        margin-bottom: 10px;
    }

    .goals {
        text-align: center;
        padding: 50px 20px;
        background-color: #fff;
        border: 5px solid #333;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .about-footer {
        background-color: #ffcc00;
        color: #333;
        text-align: center;
        padding: 15px;
        border-top: 10px solid #333;
        box-shadow: 0 -8px 6px -6px black;
    }

    .social-media a {
        margin: 0 10px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .footer-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .footer-nav li {
        margin: 0 15px;
    }

    .footer-nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .projects-header {
        background-color: #ffcc00;
        padding: 10px 0;
        border-bottom: 10px solid #333;
        box-shadow: 0 8px 6px -6px black;
        text-shadow: 2px 2px #fff;
    }

    .projects-navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .projects-navbar li {
        margin: 0 15px;
    }

    .projects-navbar a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        padding: 8px 15px;
        border: 2px solid #333;
        background-color: #ffcc00;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .projects-navbar a:hover {
        background-color: #ff0000;
        color: #fff;
        border-color: #ff0000;
        transform: scale(1.1);
    }

    .projects-gallery {
        padding: 50px 20px;
        background-color: #fff;
    }

    .projects-gallery h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .projects-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .project-item {
        width: 30%;
        margin-bottom: 20px;
        text-align: center;
    }

    .project-item img {
        max-width: 100%;
        height: auto;
        border: 3px solid #333;
        border-radius: 5px;
    }

    .projects-footer {
        background-color: #ffcc00;
        color: #333;
        text-align: center;
        padding: 15px;
        border-top: 10px solid #333;
        box-shadow: 0 -8px 6px -6px black;
    }

    .social-media a {
        margin: 0 10px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .footer-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .footer-nav li {
        margin: 0 15px;
    }

    .footer-nav a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>epep</h1>
            </div>
            <ul class="navbar">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/projects') }}">projects</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>2024 Lonely Comics. All rights reserved.</p>
    </footer>
</body>
</html>
            