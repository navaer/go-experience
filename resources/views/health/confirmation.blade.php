@extends('layouts.health')


@section('title', 'Health Home')


@section('main-content')
   <section class="demo-hero demo-hero--confirm" aria-labelledby="confirm-title">
  <div class="demo-container demo-hero_wrap">
    <div>
      <div class="demo-badge-success" aria-live="polite">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Appointment Confirmed
      </div>

      <h1 class="demo-title" id="confirm-title" style="margin-top:.6rem">
        Your appointment was scheduled successfully.
        <br />
        <!--<span style="background:linear-gradient(90deg,var(--demo-primary),var(--demo-primary-2));-webkit-background-clip:text;background-clip:text;color:white">
          Thank you!
        </span>-->
      </h1>

      <p class="demo-sub" style="max-width:62ch">
        We’ve received your request and sent a confirmation<br>If you need to make changes, please contact our team.
      </p>

      
      <div class="demo-hero_ctas">
        <a class="demo-btn demo-btn--ghost" href="/">Back to Home</a>
      </div>
    </div>

    
    <div class="demo-hero_visual" aria-label="Hero image"></div>
  </div>
</section>
@endsection

@section('custom-scripts')
@endsection
