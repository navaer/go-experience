@extends('layouts.financial')


@section('title', __('Financial Home'))


@section('main-content')
    <!-- ================= HERO ================= -->
    <section class="demo-hero" aria-labelledby="demo-hero-title">
        <div class="demo-container demo-hero_wrap">
            <div data-aos="fade-right" class="demo-hero_photo">
                <figure class="demo-hero_frame">
                    <img src="{{ asset('images/financial/gf-hero.png') }}" alt="Finance analyst working (placeholder)">
                </figure>
            </div>
            <div class="demo-hero_text">
                <div data-aos="fade-up" class="demo-eyebrow">{{ __('Banking') }}. {{ __('Your Way') }}.</div>
                <h1 data-aos="fade-up" id="demo-hero-title" class="demo-title">{{ __('Banking built') }}
                    <br>{{ __('for your everyday money moments') }}
                </h1>
                <p data-aos="fade-up" class="demo-sub">
                    {{ __('Open accounts, move money, and earn rewards with secure, mobile-first tools today.') }}</p>
                <div class="demo-hero_ctas" style="margin-top:14px">
                    <a href="#demo-faq" class="demo-btn demo-btn--primary">{{ __('Get Started') }}</a>
                    <a href="#demo-cards" class="demo-btn"
                        style="border:1px solid rgba(255,255,255,.5);color:#fff">{{ __('Learn more') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= FEATURE ROW ======= -->
    <section id="gf-form" class="demo-feature" aria-labelledby="demo-feature-title">
        <div class="demo-container demo-featrow">
            {{ html()->form('POST', url('financial'))->class('demo-form')->attributes(['data-aos' => 'fade-right'])->open() }}
            <h3 id="demo-appt-title">{{ __('Start your application') }}</h3>
            <ul>
                <li>{{ __('No impact to your credit score to start your application.') }}</li>
                <li>{{ __('DIC insured up to the legal limit.') }}</li>
                <li>{{ __('Zero liability on unauthorized debit card purchases.') }}</li>
            </ul>
            <div class="demo-form-grid">
                <div class="demo-field">
                    {{ html()->label(__('Name') . ' *')->for('name') }}
                    {{ html()->text('name')->id('name')->class('demo-input')->autofocus()->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Phone number') . ' *')->for('phone') }}
                    {{ html()->text('phone')->id('phone')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Email Address') . ' *')->for('email') }}
                    {{ html()->text('email')->id('email')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Loan Type') . ' *')->for('loan_type') }}
                    {{ html()->select('loan_type', $loanTypes, null)->placeholder(__('Select an option'))->id('loan_type')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Location') . ' *')->for('location') }}
                    {{ html()->select('location', $locations, null)->placeholder(__('Select an option'))->id('location')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Product/Description') . ' *')->for('product') }}
                    {{ html()->text('product')->id('product')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Requested Amount') . ' *')->for('amount') }}
                    {{ html()->text('amount')->id('amount')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Employment Status') . ' *')->for('employee_status') }}
                    {{ html()->select('employee_status', $employmentStatuses, null)->placeholder(__('Select an option'))->id('employment_status')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Preferred Contact Method') . ' *')->for('preferred_contact_type') }}
                    {{ html()->select('preferred_contact_type', $contactMethods, null)->placeholder(__('Select an option'))->id('preferred_contact_type')->class('demo-input')->required() }}
                </div>
                <div class="demo-field">
                    {{ html()->label(__('Front Desk Agent') . ' *')->for('agent') }}
                    {{ html()->select('agent', $frontAgents, null)->placeholder(__('Select an option'))->id('agent')->class('demo-input')->required() }}
                </div>
            </div>
            <div class="demo-actions">
                <button class="demo-btn demo-btn--primary" type="submit">{{ __('Start my application') }}</button>
            </div>
            {{ html()->form()->close() }}
            <div data-aos="fade-up" class="demo-feat-img"><img src="{{ asset('images/financial/gf-section-2.png') }}"
                    alt="People collaborating (placeholder)"></div>
        </div>
        <!-- KPI strip -->
        <div data-aos="fade-up" class="demo-container demo-kpis">
            <div class="demo-strip">
                <div class="demo-kpi"><span><img
                            src="{{ asset('images/financial/gf-ico-1.png') }}"></span><strong>2K+</strong><span>
                        {{ __('ATMs Nationwide') }}</span></div>
                <div class="demo-kpi"><span><img
                            src="{{ asset('images/financial/gf-ico-2.png') }}"></span><strong>120+</strong><span>{{ __('Community partners') }}</span>
                </div>
                <div class="demo-kpi"><span><img
                            src="{{ asset('images/financial/gf-ico-3.png') }}"></span><strong>90%</strong><span>
                        {{ __('Mobile satisfaction') }}</span></div>
                <div class="demo-kpi"><span><img
                            src="{{ asset('images/financial/gf-ico-4.png') }}"></span><strong>40+</strong><span>{{ __('Years serving') }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= CARDS (What is Lorem Ipsum?) ======= -->
    <section id="demo-cards" class="demo-cards" aria-labelledby="demo-cards-title">
        <div class="demo-container">
            <div class="demo-cards_head">
                <h2 data-aos="fade-up" id="demo-cards-title">{{ __('What is Smart Banking?') }}</h2>
            </div>
            <div class="demo-cards_grid">
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_ico"><img src="{{ asset('images/financial/gf-ico-5.png') }}"></div>
                    <h3>{{ __('How Mobile Deposit works') }}</h3>
                    <p> {{ __('Snap both sides, confirm amount, submit in app. Your funds are typically available after
                                                                                        standard hold.') }}
                    </p>
                </article>
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_ico"><img src="{{ asset('images/financial/gf-ico-5.png') }}"></div>
                    <h3>{{ __('Understanding APY and APR') }}</h3>
                    <p>{{ __('APY shows deposit growth with compounding. APR shows borrowing cost before fees and monthly
                                                                                    compounding.') }}
                    </p>
                </article>
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_ico"><img src="{{ asset('images/financial/gf-ico-5.png') }}"></div>
                    <h3>{{ __('Protect against account fraud') }}</h3>
                    <p>{{ __('Enable two-factor authentication, set transaction alerts, lock your card instantly, and report
                                                                                    suspicious activity.') }}
                    </p>
                </article>
                <article data-aos="fade-up" class="demo-card">
                    <div class="demo-card_ico"><img src="{{ asset('images/financial/gf-ico-5.png') }}"></div>
                    <h3>{{ __('Business cash management') }}</h3>
                    <p>{{ __('Streamline ACH payables, receivables, and wires, auto-sweep excess funds, and reconcile faster
                                                                                    with bank feeds.') }}
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- ======= BANDA AZUL ======= -->
    <section class="demo-bandwrap" aria-labelledby="demo-band-title">
        <div class="demo-container demo-band">
            <div class="img"><img data-aos="fade-up" src="{{ asset('images/financial/gf-section-3.png') }}"
                    alt="Analytics screenshot (placeholder)"></div>
            <div>
                <h3 data-aos="fade-right" id="demo-band-title">{{ __('Trusted by Customers & Communities Nationwide') }}
                </h3>
                <p data-aos="fade-right" class="demo-sub" style="color:#dcecff">
                    {{ __('From everyday checking to treasury
                                                                                services, GoFinancial delivers secure, transparent banking with tools that fit how you bank today.') }}
                </p>
                <ul class="demo-checks">
                    <li data-aos="fade-right"><span class="tick">✓</span> {{ __('40+ years of regional expertise') }}
                    </li>
                    <li data-aos="fade-right"><span class="tick">✓</span>
                        {{ __('FDIC member; deposits insured to legal limits') }} </li>
                    <li data-aos="fade-right"><span class="tick">✓</span> {{ __('24/7 US-based customer support') }}
                    </li>
                    <li data-aos="fade-right"><span class="tick">✓</span>
                        {{ __('Zero liability debit card protection') }} </li>
                    <li data-aos="fade-right"><span class="tick">✓</span> {{ __('FICO® score monitoring in-app') }}
                    </li>
                </ul>
                <a data-aos="fade-right" href="#gf-form"
                    class="demo-btn demo-btn--primary cta">{{ __('Open My Account') }}</a>
            </div>
        </div>
    </section>

    <!-- ======= FAQ ======= -->
    <section data-aos="fade-up" id="demo-faq" class="demo-faq" aria-labelledby="demo-faq-title">
        <div class="demo-container">
            <div class="demo-eyebrow" style="color:var(--demo-primary-2)">{{ __('What people') }}</div>
            <h2 id="demo-faq-title">{{ __('Usually Ask') }}</h2>
            <div class="demo-qa">
                <div class="qa">
                    <div class="q">{{ __('How do I open an account?') }}</div>
                </div>
                <div class="qa">
                    <div class="q">{{ __('What’s my routing number?') }}</div>
                </div>
                <div class="qa">
                    <div class="q">{{ __('When are my mobile checks available?') }}</div>
                    <div class="a">
                        {{ __('Most deposits clear within one to three business days. Larger or new account deposits may require extended holds under standard policies, though.') }}
                    </div>
                </div>
                <div class="qa">
                    <div class="q">{{ __('Do you support Zelle® and ACH transfers?') }}</div>
                </div>
                <div class="qa">
                    <div class="q">{{ __('How are my deposits insured?') }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-scripts')
    <div id='example-widget-container'>
        <script src='https://chatwidget-flows2-0.visor.ai/dist/js/visor.js'></script>
    </div>
    <script>
        if (typeof Visor !== 'undefined' && Visor) {

            Visor.destroy();

            setTimeout(() => {
                Visor.init({
                    apptoken: '{{ env('VISOR_TOKEN', '') }}',
                    environment: '{{ env('VISOR_ENVIRONMENT', '') }}',
                    tab: '68fb7baeee73ec059ef5a0f7'
                });
            }, 100);
        }
    </script>
    <script src='https://chatwidget-flows2-0.visor.ai/socket.io/socket.io.js'></script>
@endsection
