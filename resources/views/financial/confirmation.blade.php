@extends('layouts.financial')


@section('title', __('Financial Home'))


@section('main-content')
<!-- ================= HERO ================= -->
<section class="demo-hero confirmation" aria-labelledby="demo-hero-title">
  <div class="demo-container demo-hero_wrap">
    <div data-aos="fade-right" class="demo-hero_photo">
      <figure class="demo-hero_frame">
        <img src="content/img/gf-hero.png" alt="Finance analyst working (placeholder)">
      </figure>
    </div>
    <div class="demo-hero_text">
      <div data-aos="fade-up" class="demo-eyebrow">Thank you for applying with GoFinancial</div>
      <h1 data-aos="fade-up" id="demo-hero-title" class="demo-title">Your loan application<br>has been submitted</h1>
      <p data-aos="fade-up" class="demo-sub">We’ve received your loan request and our team is reviewing your information. You’ll receive an update soon with the next steps and your application summary below.</p>
      <div class="demo-hero_ctas" style="margin-top:14px">
        <a href="#demo-faq" class="demo-btn demo-btn--primary">Get Started</a>
        <a href="#demo-cards" class="demo-btn" style="border:1px solid rgba(255,255,255,.5);color:#fff">Learn more</a>
      </div>
    </div>
  </div>
</section>

<!-- CONFIRMATION SUMMARY -->
<section id="gh-summary" class="demo-confirm" aria-labelledby="appt-summary-title">
  <div class="demo-container">
    <div class="demo-confirm_cards" data-aos="fade-up">

      <!-- Card 1: Appointment Summary -->
      <article class="demo-card" aria-labelledby="appt-summary-title">
        <h2 class="demo-title" id="appt-summary-title" style="margin-top:0">Application Summary</h2>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- user -->
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm7 9a7 7 0 0 0-14 0" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </div>
          <div class="demo-kv_text">
            <small>Full name</small>
            <strong>Alex Johnson</strong>
          </div>
        </div>

        <div class="demo-kv">
         <div class="demo-ico" aria-hidden="true">
            <!-- phone -->
            <svg viewBox="0 0 24 24" fill="none"><path d="M22 16.92v2a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.1 4.18 2 2 0 0 1 4.11 2h2a2 2 0 0 1 2 1.72 12.66 12.66 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.66 12.66 0 0 0 2.81.7A2 2 0 0 1 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </div>
          <div class="demo-kv_text">
            <small>Phone</small>
            <strong>(000) 555-0149</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none"><path d="M4 6h16v12H4zM4 7l8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div class="demo-kv_text">
            <small>Email</small>
            <strong>alex.johnson@example.com</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- confirmation / hash -->
            <svg viewBox="0 0 24 24" fill="none"><path d="M10 3L8 21M16 3l-2 18M4 8h16M3 16h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          </div>
          <div class="demo-kv_text">
            <small>Loan Type</small>
            <strong>Personal</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- location -->
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 21s7-5.4 7-11A7 7 0 1 0 5 10c0 5.6 7 11 7 11Z M12 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div class="demo-kv_text">
            <small>Location</small>
            <strong>Miami</strong>
          </div>
        </div>
        
      </article>

      <!-- Card 2: Details you provided -->
      <article class="demo-card" aria-labelledby="appt-details-title">

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- user -->
           <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
          </div>
          <div class="demo-kv_text">
            <small>Product/Description</small>
            <strong>Loan</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
           <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <div class="demo-kv_text">
            <small>Requested Amount</small>
            <strong>$0000000000</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- phone -->
           <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
          </div>
          <div class="demo-kv_text">
            <small>Employment Status</small>
            <strong>Full Time</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- note -->
           <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
          </div>
          <div class="demo-kv_text">
            <small>Prefered contact method</small>
            <strong>SMS</strong>
          </div>
        </div>

        <div class="demo-kv">
          <div class="demo-ico" aria-hidden="true">
            <!-- note -->
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
          </div>
          <div class="demo-kv_text">
            <small>Agent</small>
            <strong>PLACEHOLDER</strong>
          </div>
        </div>

        <p class="demo-meta" style="margin:10px 0 0;color:#5d6475">
          A copy of this confirmation was sent to your email.
        </p>
      </article>

    </div>
  </div>
</section>
@endsection