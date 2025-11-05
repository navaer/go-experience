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
        /* ES lang selector script */
        document.addEventListener('DOMContentLoaded', function() {
              const esBtn = document.getElementById('lang-es-btn');
              const submenu = document.querySelector('.lang-submenu');
            
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

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/health.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

    <style>

        /* ES lang selector Styles */
        .lang-switcher-static {
                    position: relative;
                }

                .lang-submenu li a img {
                    display: block;
                    width: 30px;
                    margin: 0 auto;
                }

                .lang-submenu {
                    position: absolute;
                    top: 50px;
                    right: 0px;
                    background: white;
                    border-radius: 8px;
                    list-style: none;
                    padding: 0.4rem;
                    margin: 0;
                    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.15);
                    opacity: 0;
                    visibility: hidden;
                    transform: translateY(5px);
                    transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
                    z-index: 999;
                    display: flex;
                    gap:10px;
                }
                .lang-submenu li a:hover {
                  background: rgba(0, 0, 0, 0.05);
                }
                
                .lang-submenu.open {
                  opacity: 1;
                  visibility: visible;
                  transform: translateY(0);
                }
                
                /* responsive */
                @media (max-width: 900px) {
                  .lang-submenu {
                    top: 42px;
                    right: 0;
                  }
                }
        /*-------------------------*/

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

        /*language-switcher*/
        .lang-switcher-static {
            display: flex;
            gap: 0.75rem;
            align-items: center;
        }

        .lang-switcher-static .lang-btn {
            width: 44px;
            height: 44px;
            display: inline-grid;
            place-items: center;
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: rgba(255, 255, 255, 0.95);
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            border-radius: 6px;
            text-decoration: none;
            background: transparent;
            transition: background 0.12s, color 0.12s, border-color 0.12s;
        }

        .lang-switcher-static .lang-btn:hover,
        .lang-switcher-static .lang-btn:focus {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.45);
            color: #fff;
        }

        /*-------*/
        .lang-switcher-static .lang-btn.active {
            background: #ffffff;
            color: #2b3a40;
            border-color: rgba(0, 0, 0, 0.06);
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

            .lang-switcher-static .lang-btn {
                width: 35px;
                height: 35px;
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

                <a href="#"
                    class="lang-btn {{ app()->getLocale() === 'es' ? 'active' : '' }}" title="Español (ES)">
                    ES
                </a>
                <ul class="lang-submenu">
                    <li>
                        <a href="https://experience.gocontact.com.co/health?lang=es-mx" title="México">
                            <img src="{{ asset('images/health/mx.svg') }}" alt="Bandera de México">
                        </a>
                    </li>
                    <li>
                        <a href="https://experience.gocontact.com.co/health?lang=es-co" title="Colombia">
                            <img src="{{ asset('images/health/co.svg') }}" alt="Bandera de Colombia">
                        </a>
                    </li>
                    <li>
                        <a href="https://experience.gocontact.com.co/health?lang=es-es" title="España">
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
    @include('flash::message')
    @yield('custom-scripts')
</body>

</html>
