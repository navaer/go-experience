@extends('layouts.health')


@section('title', 'Health Home')


@section('main-content')
    <section class="demo-hero demo-hero--confirm" aria-labelledby="confirm-title">
        <div class="demo-container demo-hero_wrap">
            <div>
                <div class="demo-badge-success" aria-live="polite">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    {{ __('Appointment Confirmed') }}
                </div>

                <h1 class="demo-title" id="confirm-title" style="margin-top:.6rem">
                    {{ __('Your appointment was scheduled successfully.') }}
                    <br />
                    <!--<span style="background:linear-gradient(90deg,var(--demo-primary),var(--demo-primary-2));-webkit-background-clip:text;background-clip:text;color:white">
                      Thank you!
                    </span>-->
                </h1>

                <p class="demo-sub" style="max-width:62ch">
                    {{ __('We’ve received your request and sent a confirmation') }}<br>{{ __('If you need to make changes, please contact our team') }}.
                </p>


                <div class="demo-hero_ctas">
                    <a class="demo-btn demo-btn--ghost" href="#gh-summary">{{ __('See summary') }}</a>
                </div>
            </div>

            <div class="demo-hero_visual" aria-label="Hero image"></div>
        </div>
    </section>
    <!-- CONFIRMATION SUMMARY -->
    <section id="gh-summary" class="demo-confirm" aria-labelledby="appt-summary-title">
        <div class="demo-container">
            <div class="demo-confirm_cards" data-aos="fade-up">

                <!-- Card 1: Appointment Summary -->
                <article class="demo-card" aria-labelledby="appt-summary-title">
                    <h2 class="demo-title" id="appt-summary-title" style="margin-top:0">{{ __('Appointment Summary') }}</h2>

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M7 3v4M17 3v4M4 11h16M5 7h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Date & time') }}</small>
                            <strong>{{ $appointment->appointment_date }}</strong>
                        </div>
                    </div>

                    <!--<div class="demo-kv">
                      <div class="demo-ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M7 3v6a4 4 0 1 0 8 0V3M3 5v2a6 6 0 0 0 12 0V5M19 10v5a3 3 0 1 1-3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                      </div>
                      <div class="demo-kv_text">
                        <small>Specialty</small>
                        <strong>Family Medicine</strong>
                      </div>
                    </div>-->

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M10 3L8 21M16 3l-2 18M4 8h16M3 16h18" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Confirmation') }} #</small>
                            <strong>{{ $appointment->id }}</strong>
                        </div>
                    </div>

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M9 7h6M9 11h6M9 15h4M5 3h14v18H5z" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Specialty') }}</small>
                            <strong>{{ __($appointment->medical_specialty) }}</strong>
                        </div>
                    </div>

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm7 9a7 7 0 0 0-14 0" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Provider') }}</small>
                            <strong>{{ $appointment->doctor_name }}</strong>
                        </div>
                    </div>

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 21s7-5.4 7-11A7 7 0 1 0 5 10c0 5.6 7 11 7 11Z M12 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Location') }}</small>
                            <strong>{{ $appointment->patient->address }}</strong>
                        </div>
                    </div>
                </article>

                <!-- Card 2: Details you provided -->
                <article class="demo-card" aria-labelledby="appt-details-title">
                    <h3 id="appt-details-title" style="margin:0 0 6px">{{ __('Details you provided') }}</h3>

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm7 9a7 7 0 0 0-14 0" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Full name') }}</small>
                            <strong>{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</strong>
                        </div>
                    </div>

                    <!--<div class="demo-kv">
                      <div class="demo-ico" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none"><path d="M4 6h16v12H4zM4 7l8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                      </div>
                      <div class="demo-kv_text">
                        <small>Email</small>
                        <strong>alex.johnson@example.com</strong>
                      </div>
                    </div>-->

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M22 16.92v2a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.1 4.18 2 2 0 0 1 4.11 2h2a2 2 0 0 1 2 1.72 12.66 12.66 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.66 12.66 0 0 0 2.81.7A2 2 0 0 1 22 16.92Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Phone') }}</small>
                            <strong>{{ $appointment->patient->phone }}</strong>
                        </div>
                    </div>

                    <div class="demo-kv">
                        <div class="demo-ico" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M9 7h6M9 11h6M9 15h4M5 3h14v18H5z" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="demo-kv_text">
                            <small>{{ __('Notes') }}</small>
                            <strong>{{ $appointment->notes }}</strong>
                        </div>
                    </div>

                    <p class="demo-meta" style="margin:10px 0 0;color:#5d6475">
                        {{ __('A copy of this confirmation was sent to your email') }}.
                    </p>
                </article>

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
                    apptoken: '{{ env("VISOR_TOKEN", "") }}',
                    environment: '{{ env("VISOR_ENVIRONMENT", "") }}',
                    tab: '{{ $visorTab }}',
                    customVariables: {
                        appointmentId: '{{ $appointment->id }}',
                        patientName: '{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}',
                        appointmentDate: '{{ $appointment->appointment_date }}',
                        doctorName: '{{ $appointment->doctor_name }}',
                        specialty: '{{ $appointment->medical_specialty }}'
                    }
                });
            }, 100);
        }
    </script>
    <script src='https://chatwidget-flows2-0.visor.ai/socket.io/socket.io.js'></script>
@endsection
