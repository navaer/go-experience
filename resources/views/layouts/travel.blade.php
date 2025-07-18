<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/travel.css') }}"> <!-- Link to the CSS file -->
    <script src="{{ asset('js/travel.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Link to the favicon -->
    <meta name="description"
        content="GoTravel is your go-to platform for exploring the world. Discover new destinations, plan your trips, and enjoy travel tips.">
    <meta name="keywords" content="travel, explore, destinations, trips, tourism">
    <meta name="author" content="GoTravel Team">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>

<body>
    <ul class="lang-switch">
        <li><a href="https://gocontactse.gocontact.com.co/pt" title="Português">PT</a></li>
        <li><a href="?lang=en" title="English">EN</a></li>
        <li><a href="?lang=es" title="Español">ES</a></li>
    </ul>
    <header>
        <div class="header-container">
            <a href="{{ url('/travel') }}">
                <img src="{{ asset('images/travel/go-travel-logo-.png') }}" alt="GoTravel Logo" class="logo">
            </a>
            <nav class="navigation">
                <ul class="nav-links">
                    <li><a href="#vacations">Vacations</a></li>
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#cruises">Cruises</a></li>
                    <li><a href="#guided-tours">Guided Tours</a></li>
                    <li><a href="#group-travel">Group Travel</a></li>
                    <li><a href="#offers">Irresistible Offers</a></li>
                </ul>
                <button class="hamburger-menu" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
        <div class="footer-menu">
            <div class="footer-column">
                <a href="{{ url('/travel') }}">
                    <img src="{{ asset('images/travel/go-travel-blue.png') }}" alt="GoTravel Logo" class="footer-logo">
                </a>
            </div>
            <div class="footer-column">
                <h3>Your Trip</h3>
                <ul>
                    <li><a href="#vacations">Vacations</a></li>
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#cruises">Cruises</a></li>
                    <li><a href="#guided-tours">Guided Tours</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>About Us</h3>
                <ul>
                    <li><a href="#our-story">Our Story</a></li>
                    <li><a href="#our-blog">Our Blog</a></li>
                    <li><a href="#our-partner">Our Partner</a></li>
                    <li><a href="#contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="#group-travel">Group Travel</a></li>
                    <li><a href="#offers">Irresistible Offers</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <a href="https://facebook.com" target="_blank"><img src="{{ asset('images/travel/facebook.png') }}"
                        alt="Facebook Icon"></a>
                <a href="https://twitter.com" target="_blank"><img src="{{ asset('images/travel/twitter.png') }}"
                        alt="Twitter Icon"></a>
                <a href="https://instagram.com" target="_blank"><img src="{{ asset('images/travel/instagram.png') }}"
                        alt="Instagram Icon"></a>
            </div>
        </div>
        <hr>
        <p>&copy; 2025 All Rights Reserved</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src={{ asset('js/toastr.min.js') }}></script>
    @include('flash::message')
    @yield('custom-scripts');
</body>

</html>
