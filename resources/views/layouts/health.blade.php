<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>@yield('title', 'GoHealth')</title>

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/health.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>

<body>
    <header class="demo-header">
        <div class="demo-container">
            <a href="{{ url('health') }}" class="demo-logo" aria-label="GoHealth Logo">
                <img src="{{ asset('images/health/gh-logo.png') }}" alt="GoHealth Logo">
            </a>
            <nav class="demo-nav" id="demo-nav">
                <ul>
                    <li><a href="#demo-hero">{{ __('Home') }}</a></li>
                    <li><a href="#demo-team">{{ __('Team') }}</a></li>
                    <li><a href="#demo-services">{{ __('Services') }}</a></li>
                    <li><a href="#demo-modern">{{ __('Why Choose Us') }}</a></li>
                    <li><a href="#demo-apart">{{ __('What Sets Us Apart') }}</a></li>
                    <li><a href="#demo-blogposts">{{ __('Blog') }}</a></li>
                    <li><a href="#demo-appt">{{ __('Contact Us') }}</a></li>
                </ul>

            </nav>
            {{-- language switcher --}}
            <div class="lang-switcher-static" aria-hidden="false">
                <a href="{{ request()->fullUrlWithQuery(['lang' => 'pt']) }}"
                    class="lang-btn {{ app()->getLocale() === 'pt' ? 'active' : '' }}" title="Português (PT)">
                    PT
                </a>

                <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}"
                    class="lang-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}" title="English (EN)">
                    EN
                </a>

                <a href="#" id="lang-es-btn" class="lang-btn {{ Str::startsWith(app()->getLocale(), 'es') ? 'active' : '' }}"
                    title="Español (ES)">
                    ES {{app()->getLocale()}}
                </a>
                <ul class="lang-submenu">
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['lang' => 'es-mx']) }}" title="México">
                            <img src="{{ asset('images/health/mx.svg') }}" alt="Bandera de México">
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['lang' => 'es-co']) }}" title="Colombia">
                            <img src="{{ asset('images/health/co.svg') }}" alt="Bandera de Colombia">
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->fullUrlWithQuery(['lang' => 'es-es']) }}" title="España">
                            <img src="{{ asset('images/health/es.svg') }}" alt="Bandera de España">
                        </a>
                    </li>
                </ul>
            </div>

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

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.AOS) AOS.init({
                once: true
            });
        });
        /* ES lang selector script */
        document.addEventListener('DOMContentLoaded', function() {
            const esBtn = document.getElementById('lang-es-btn');
            const submenu = document.querySelector('.lang-submenu');

            console.log(esBtn, submenu);

            if (esBtn && submenu) {
                esBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    submenu.classList.toggle('open');
                });

                document.addEventListener('click', function(e) {
                    if (!esBtn.contains(e.target) && !submenu.contains(e.target)) {
                        submenu.classList.remove('open');
                    }
                });
            }
        });
    </script>

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

    @include('flash::message')
    @yield('custom-scripts')
</body>

</html>
