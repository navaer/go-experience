@extends('layouts.health')


@section('title', 'Health Home')


@section('main-content')
    <!-- ================= HERO ================= -->
    <section class="demo-hero" aria-labelledby="demo-hero-title">
        <div class="demo-container demo-hero_wrap">
            <div>
                <h1 data-aos="fade-up" id="demo-hero-title" class="demo-title">Expert care.<br><span
                        style="background:linear-gradient(90deg,var(--demo-primary),var(--demo-primary-2));-webkit-background-clip:text;background-clip:text;color:white">Centered
                        around you.</span></h1>
                <p data-aos="fade-up" class="demo-sub">With same-day availability, extended hours, and trusted providers
                    across specialties, GoHealth is here when &amp; where you need us.</p>
                <div class="demo-hero_ctas">
                    <a href="#demo-appt" class="demo-btn demo-btn--primary">Request an Appointment</a>
                    <a href="#demo-apart" class="demo-btn demo-btn--ghost">Learn More About Our Approach</a>
                </div>
            </div>
            <div class="demo-hero_visual" aria-label="Hero preview image (placeholder)"></div>
        </div>

        <!-- Cinta y chips -->
        <div class="demo-container demo-ribbon">
            <div class="demo-ribbon_inner">
                <div class="demo-pill">Why<br>choose us</div>
                <div class="demo-chips" role="list" aria-label="Key stats">
                    <div data-aos="fade-up" class="demo-chip" role="listitem">
                        <strong>11</strong><span>Years<br>Experience</span>
                    </div>
                    <div data-aos="fade-up" class="demo-chip" role="listitem">
                        <strong>734+</strong><span>Completed<br>Projects</span>
                    </div>
                    <div data-aos="fade-up" class="demo-chip" role="listitem">
                        <strong>57+</strong><span>Running<br>Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= TEAM ================= -->
    <section id="demo-team" class="demo-team" aria-labelledby="demo-team-title">
        <div class="demo-container">
            <h2 data-aos="fade-up" id="demo-team-title" class="demo-title">Our great team</h2>
            <div data-aos="fade-up" class="demo-team_grid">
                <article class="demo-docard">
                    <div class="demo-docard_avatar" aria-hidden="true"></div>
                    <h3 class="demo-docard_name">Dr. Emily Brooks</h3>
                    <p class="demo-docard_role">Family Medicine Physician</p>
                </article>
                <article class="demo-docard">
                    <div class="demo-docard_avatar" aria-hidden="true"></div>
                    <h3 class="demo-docard_name">Dr. Michael Harris</h3>
                    <p class="demo-docard_role">Internal Medicine Specialist</p>
                </article>
                <article class="demo-docard">
                    <div class="demo-docard_avatar" aria-hidden="true"></div>
                    <h3 class="demo-docard_name">Dr. Olivia Bennett</h3>
                    <p class="demo-docard_role">Pediatrician</p>
                </article>
                <article class="demo-docard">
                    <div class="demo-docard_avatar" aria-hidden="true"></div>
                    <h3 class="demo-docard_name">Dr. James Walker</h3>
                    <p class="demo-docard_role">Cardiologist</p>
                </article>
            </div>
        </div>
    </section>

    <!-- ================= SERVICES ================= -->
    <section id="demo-services" class="demo-services" aria-labelledby="demo-services-title">
        <div class="demo-container">
            <div data-aos="fade-up" class="demo-eyebrow">Your Health, Our Priority</div>
            <p data-aos="fade-up" class="services-subtitle">Comprehensive care for every stage of life, from everyday
                checkups to urgent concerns and everything in between.</p>
            <div class="demo-head">
                <h2 id="demo-services-title" class="demo-title" style="margin:0">Our Services</h2>
            </div>
            <div data-aos="fade-up" class="demo-services_grid">
                <article class="demo-service">
                    <div class="demo-ico"><img src="{{ asset('images/health/ico-1.png') }}" alt="urgent care"></div>
                    <div class="service-card-text">
                        <h3>Urgent Care</h3>
                        <p>Same-day visits for flu, infections, minor injuries, and more.</p>
                    </div>
                </article>
                <article class="demo-service is-active">
                    <div class="demo-ico"><img src="{{ asset('images/health/ico-2.png') }}" alt="Pediatrics"></div>
                    <div class="service-card-text">
                        <h3>Pediatrics</h3>
                        <p>Care for infants, toddlers, children, and teens.</p>
                    </div>
                </article>
                <article class="demo-service">
                    <div class="demo-ico"><img src="{{ asset('images/health/ico-3.png') }}" alt="Women’s Health">
                    </div>
                    <div class="service-card-text">
                        <h3>Women’s Health</h3>
                        <p>Well-woman visits, contraception counseling, menopause support.</p>
                    </div>
                </article>
                <article class="demo-service">
                    <div class="demo-ico"><img src="{{ asset('images/health/ico-4.png') }}" alt="chronic Condition">
                    </div>
                    <div class="service-card-text">
                        <h3>Chronic Condition</h3>
                        <p>Support for diabetes, hypertension, asthma, and more.</p>
                    </div>
                </article>
                <article class="demo-service">
                    <div class="demo-ico"><img src="{{ asset('images/health/ico-5.png') }}" alt="Primary Care"></div>
                    <div class="service-card-text">
                        <h3>Primary Care</h3>
                        <p>Preventative screenings, annual exams, and chronic care.</p>
                    </div>
                </article>
                <article class="demo-service">
                    <div class="demo-ico"><img src="{{ asset('images/health/ico-6.png') }}" alt="Health Checks">
                    </div>
                    <div class="service-card-text">
                        <h3>Health Checks</h3>
                        <p>Sports, schools, employment, and wellness physicals.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ================= MODERN CARE (banda) ================= -->
    <section id="demo-modern" class="demo-modern" aria-labelledby="demo-modern-title">
        <div class="demo-container">
            <div data-aos="fade-up" class="demo-eyebrow">Why Choose GoHealth</div>
            <h3 data-aos="fade-up" id="demo-modern-title">Modern Care with a Human Touch</h3>
            <div class="demo-band">
                <p>Your healthcare experience should be as seamless as it is compassionate. At GoHealth, we combine
                    clinical excellence with cutting-edge convenience to make staying healthy feel simple and
                    empowering.</p>
                <!--<div class="demo-note">We make it easy to manage appointments, forms, and follow-ups—so you can focus on what matters.</div>-->
            </div>
        </div>
    </section>

    <!-- ================= WHAT SETS US APART (split) ================= -->
    <section id="demo-apart" class="demo-apart" aria-labelledby="demo-apart-title">
        <div class="demo-container demo-split">
            <div class="demo-apart_media" aria-label="Clinic teamwork (placeholder)"></div>
            <div class="demo-apart_card">
                <h3 data-aos="fade-up" id="demo-apart-title">What Sets Us Apart?</h3>
                <ul class="demo-list">
                    <li data-aos="fade-up">Board‑certified providers across specialties</li>
                    <li data-aos="fade-up">Same‑day and next‑day appointments available</li>
                    <li data-aos="fade-up">Care coordination for referrals and access to specialists</li>
                    <li data-aos="fade-up">Modern clinics with lab and imaging on‑site in most locations</li>
                    <li data-aos="fade-up">Digital tools to manage appointments, forms, and follow‑ups with ease</li>
                </ul>
                <a href="#demo-appt" class="demo-btn demo-btn--primary">Learn more about our approach</a>
            </div>
        </div>
    </section>

    <!-- ================= BLOG POSTS ================= -->
    <section id="demo-blogposts" class="demo-blogposts" aria-labelledby="demo-blog-title">
        <div class="demo-container">
            <div data-aos="fade-up" class="demo-eyebrow">Blog Posts</div>
            <h3 data-aos="fade-up" id="demo-blog-title" class="demo-section">Latest Update</h3>
            <div class="demo-blog_grid">
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_media"></div>
                    <div class="demo-card_body">
                        <h4>The Benefits of Mindfulness Meditation for Stress and Anxiety</h4>
                        <div class="demo-meta">Latest Update · Blog</div>
                    </div>
                </article>
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_media"></div>
                    <div class="demo-card_body">
                        <h4>Healthy Eating on a Budget: Tips and Strategies</h4>
                        <div class="demo-meta">Latest Update · Blog</div>
                    </div>
                </article>
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_media"></div>
                    <div class="demo-card_body">
                        <h4>The Importance of Regular Cancer Screenings and Early Detection</h4>
                        <div class="demo-meta">Latest Update · Blog</div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ================= APPOINTMENT (form + círculo imagen) ================= -->
    <section id="demo-appt" class="demo-appt" aria-labelledby="demo-appt-title">
        <div class="demo-container demo-shell">
            <div data-aos="fade-up" class="demo-appt_circle" aria-hidden="true"></div>
            {{ html()->form('POST', 'health')->class('demo-form')->open() }}
            <h3 data-aos="fade-up" id="demo-appt-title">Request Your Appointment</h3>
            <p data-aos="fade-up">We’ll contact you to confirm the date and time.</p>
            <div class="demo-grid">
                <div class="demo-field">
                    {{ html()->label(__('Name') . ' *')->for('contact') }}
                    {{ html()->text('contact')->id('contact')->class('demo-input')->autofocus()->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Date of birth') . ' *')->for('birthday') }}
                    {{ html()->date('birthday')->id('birthday')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Medical Record Number') . ' *')->for('medical_record') }}
                    {{ html()->text('medical_record')->id('medical_record')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Phone number') . ' *')->for('phone') }}
                    {{ html()->text('phone')->id('phone')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Reason for visit') . ' *')->for('visit_reason') }}
                    {{ html()->text('visit_reason')->id('visit_reason')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Location') . ' *')->for('location') }}
                    {{ html()->text('location')->id('location')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Preferred Date') . ' *')->for('date') }}
                    {{ html()->date('date')->id('date')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Preferred Time') . ' *')->for('time') }}
                    {{ html()->time('time')->id('time')->class('demo-input')->required() }}
                </div>
            </div>
            <div class="demo-actions"><button class="demo-btn demo-btn--primary" type="submit">Submit</button></div>
            {{ html()->form()->close() }}
        </div>
    </section>
@endsection

@section('custom-scripts')
@endsection
