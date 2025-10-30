<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoFinancial - {{ __('Modern Finance Landing Page') }}</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="{{ asset('css/financial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header class="demo-header" id="demo-header">
        <div class="demo-header_inner">
            <div class="demo-brand"><a href="{{ url('financial')}}"><img src="{{ asset('images/financial/gf-logo.png') }}" alt="GoFinancial-logo"></a>
            </div>
            <nav class="demo-nav" aria-label="Primary">
                <a href="{{ url('financial')}}">{{ __('Home') }}</a>
                <a href="#">{{ __('About') }}</a>
                <a href="#demo-cards">{{ __('Services') }}</a>
                <a href="#demo-faq">{{ __('FAQ') }}</a>
                <a href="#demo-footer">{{ __('Contact') }}</a>
            </nav>
        </div>
    </header>
    <div class="demo-header-spacer" aria-hidden="true"></div>

    <main>
        @yield('main-content')
    </main>

    <!-- ======= FOOTER inclinado ======= -->
    <footer id="demo-footer" class="demo-footer" aria-labelledby="demo-footer-title">
        <div class="demo-container demo-footer_inner">
            <div>
                <div class="demo-logo">Go<span style="font-weight:300">Financial</span></div>
                <p style="opacity:.85">Copyright © 2025 GoFinancial. All rights reserved.</p>
            </div>
            <div class="demo-foot">
                <h4>{{ __('About Us') }}</h4>
                <ul>
                    <li><a href="#">{{ __('Departments') }}</a></li>
                    <li><a href="#">{{ __('Doctors') }}</a></li>
                    <li><a href="#">{{ __('Timetable') }}</a></li>
                    <li><a href="#">{{ __('Appointment') }}</a></li>
                    <li><a href="#">{{ __('Testimonials') }}</a></li>
                </ul>
            </div>
            <div class="demo-foot">
                <h4>{{ __('Resources') }}</h4>
                <ul>
                    <li><a href="#">{{ __('Pricing') }}</a></li>
                    <li><a href="#">{{ __('Security') }}</a></li>
                    <li><a href="#">{{ __('Guides') }}</a></li>
                    <li><a href="#">{{ __('Support') }}</a></li>
                    <li><a href="#">{{ __('Status') }}</a></li>
                </ul>
            </div>
            <div class="demo-foot">
                <h4>{{ __('Follow Us') }}</h4>
                <div class="demo-social">
                    <div class="demo-soc">f</div>
                    <div class="demo-soc">yt</div>
                    <div class="demo-soc">in</div>
                    <div class="demo-soc">ig</div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src={{ asset('js/toastr.min.js') }}></script>
    @include('flash::message')
    @yield('custom-scripts')
</body>

</html>

<script>
    // Header: transparente arriba, sólido al hacer scroll
    (function() {
        const hdr = document.getElementById('demo-header');
        const onScroll = () => {
            if (window.scrollY > 8) hdr.classList.add('is-solid');
            else hdr.classList.remove('is-solid');
        };
        onScroll();
        window.addEventListener('scroll', onScroll, {
            passive: true
        });
    })();

    AOS.init();
</script>
