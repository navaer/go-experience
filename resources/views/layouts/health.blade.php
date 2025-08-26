<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('title', 'GoHealth')</title>

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.AOS) AOS.init({
                once: true
            });
        });
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/health.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

    <style>
        .demo-header {
            background: #32ade6cc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            padding: 20px 0;
        }

        .demo-header .demo-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1.5rem;
        }

        .demo-logo img {
            height: 40px;
            width: auto;
            display: block;
        }

        .demo-nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .demo-nav a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            transition: color 0.2s;
        }

        .demo-nav a:hover,
        .demo-nav a:focus {
            color: #274760;
        }

        .demo-nav-toggle {
            display: none;
            flex-direction: column;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            cursor: pointer;
            gap: 6px;
            padding: 0;
        }

        .demo-nav-toggle span {
            display: block;
            height: 4px;
            width: 28px;
            background: white;
            border-radius: 2px;
            transition: all 0.3s;
        }

        @media (max-width: 900px) {
            .demo-nav ul {
                gap: 1rem;
            }
        }

        @media (max-width: 700px) {
            .demo-nav {
                position: absolute;
                top: 96px;
                right: 0;
                background: #4eb3ff;
                width: 220px;
                box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
                transform: translateX(100%);
                transition: transform 0.3s;
                z-index: 200;
                padding: 1.5rem 1rem;
                border-radius: 0 0 0 12px;
            }

            .demo-nav.open {
                transform: translateX(0);
            }

            .demo-nav ul {
                flex-direction: column;
                gap: 1.5rem;
            }

            .demo-nav-toggle {
                display: flex;
            }
        }

        .demo-nav-toggle.open span:nth-child(1) {
            transform: translateY(10px) rotate(45deg);
        }

        .demo-nav-toggle.open span:nth-child(2) {
            opacity: 0;
        }

        .demo-nav-toggle.open span:nth-child(3) {
            transform: translateY(-10px) rotate(-45deg);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.getElementById('demo-nav');
            const toggle = document.getElementById('demo-nav-toggle');
            toggle.addEventListener('click', function() {
                const isOpen = nav.classList.toggle('open');
                toggle.classList.toggle('open', isOpen);
                toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
            // Optional: close nav on link click (mobile)
            nav.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 700) {
                        nav.classList.remove('open');
                        toggle.classList.remove('open');
                        toggle.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        });
    </script>

</head>

<body>
    <header class="demo-header">
        <div class="demo-container">
            <a href="#" class="demo-logo" aria-label="GoHealth Logo">
                <img src="{{ asset('images/health/gh-logo.png') }}" alt="GoHealth Logo">
            </a>
            <nav class="demo-nav" id="demo-nav">
                <ul>
                    <li><a href="#demo-hero">Home</a></li>
                    <li><a href="#demo-team">Team</a></li>
                    <li><a href="#demo-services">Services</a></li>
                    <li><a href="#demo-modern">Why Choose Us</a></li>
                    <li><a href="#demo-apart">What Sets Us Apart</a></li>
                    <li><a href="#demo-blogposts">Blog</a></li>
                    <li><a href="#demo-appt">Contact Us</a></li>
                </ul>
            </nav>
            <button class="demo-nav-toggle" id="demo-nav-toggle" aria-label="Open menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>
        @yield('main-content')
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src={{ asset('js/toastr.min.js') }}></script>
    @include('flash::message')
    @yield('custom-scripts');
</body>
