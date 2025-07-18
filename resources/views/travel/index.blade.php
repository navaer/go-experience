@extends('layouts.travel')

@section('title', 'Travel Home')


@section('main-content')
    <section class="hero">
        <h1>get your travel on</h1>
        <p>Planning is easy. Adventures are endless. Let's go.</p>
        <a href="#destinations" class="cta-button light">Get started</a>
    </section>
    <section id="form">
        {{ html()->form('POST', 'contacts')->open() }}
        <div class="form-container">
            <h2>Plan Your Trip</h2>

            {{ html()->label(__('Name') . ' *')->for('contact') }}
            {{ html()->text('contact')->id('contact')->autofocus()->required() }}

            {{ html()->label(__('Phone') . ' *')->for('phone') }}
            {{ html()->text('phone')->id('phone')->required() }}

            {{ html()->label(__('Email') . ' *')->for('email') }}
            {{ html()->email('email')->id('email')->required() }}

            {{ html()->label(__('From') . ' *')->for('origin') }}
            {{ html()->text('origin')->id('origin')->required() }}

            {{ html()->label(__('To') . ' *')->for('destination') }}
            {{ html()->text('destination')->id('destination')->required() }}

            {{ html()->label(__('Departure Date') . ' *')->for('checkIn') }}
            {{ html()->date('checkIn')->id('checkIn')->required() }}

            {{ html()->label(__('Return Date') . ' *')->for('checkOut') }}
            {{ html()->date('checkOut')->id('checkOut')->required() }}

            {{ html()->label('* ' . __('Required')) }}

            <button type="submit" class="cta-button">Plan My Trip</button>

        </div>
        {{ html()->form()->close() }}
    </section>
    <section id="escapes">
        <div class="grid-40-60">
            <div class="escapes-copy">
                <img src="{{ asset('images/travel/form.gif') }}" alt="Escapes Image" class="escapes-image">
                <h2>Stress-free escapes you can book now. </h2>
                <p>From spontaneous road trips to long-awaited bucket-list escapes, these destinations are trending
                    for all the right reasons.<br>
                    <br>Pick your vibe, book your stay, and we’ll take care of the rest.
                </p>
            </div>
            <div class="destination-cards">
                <div class="card">
                    <img src="{{ asset('images/travel/destination-1.jpg') }}" alt="Destination 1">
                    <h3>Amalfi Cost Retreat 7 Nights </h3>
                    <p>Private villa, sunset boat tour, and pasta-making class. Airfare included. </p>
                    <small>Starting at <strong>$2,299</strong> per person</small>
                </div>
                <div class="card">
                    <img src="{{ asset('images/travel/destination-2.jpg') }}" alt="Destination 2">
                    <h3>All-Inclusive Riviera Maya</h3>
                    <p>5-Star beachfront resort, spa credit, unlimited dining & drinks.  </p>
                    <small>Starting at <strong>$1,499</strong> per person</small>
                </div>
                <div class="card">
                    <img src="{{ asset('images/travel/destination-3.jpg') }}" alt="Destination 3">
                    <h3>NYC City Lights Weekend  </h3>
                    <p>3 nights in Midtown, Broadway show tickets & food tour.  </p>
                    <small>Starting at <strong>$899</strong> per person</small>
                </div>
                <div class="card">
                    <img src="{{ asset('images/travel/destination-4.jpg') }}" alt="Destination 4">
                    <h3>Yellowstone Family Adventure  </h3>
                    <p>Guided hikes, wildlife safari, and lodge stays inside the park. </p>
                    <small>Starting at <strong>$1,299</strong> per person</small>
                </div>
            </div>
        </div>
    </section>
    <section id="affirm">
        <div class="affirm-container">
            <div class="affirm-title">
                <h2>Now Available!<strong class="light">Pay Over Time With</strong></h2>
                <img src="{{ asset('images/travel/affirm-logo.png') }}" alt="Affirm Logo" class="affirm-logo">
            </div>
            <p>GoTravel has partnered with Affirm to offer flexible payment options that let you book now and pay
                over time with no hidden fees. When you’re ready to book, get in touch with us through chat, email,
                or phone, and request Affirm as your payment method. Pick the payment plan that works best for you
                with fixed monthly installments from 3, 6, 12 or 18 months. Subject to eligibility.  </p>
            <a href="https://www.affirm.com" class="cta-button white" target="_blank">Learn More</a><br>
            <a href="#"><small>Terms and conditions apply</small></a>
        </div>
    </section>
    <section id="trips">
        <div>
            <h2>Over 10,000 trips planned each year</h2>
            <p>Trusted by families, couples & solo adventurers</p>
            <div class="grid-50">
                <div class="testimonial">
                    <img src="{{ asset('images/travel/stars.png') }}" alt="Testimonial 1">
                    <p>We told them our budget and dream destination. And they delivered. It was absolutely
                        effortless. And honestly, it was the best vacation we’ve ever had.</p>
                    <small>The Smyths Family, California </small>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('images/travel/stars.png') }}" alt="Testimonial 1">
                    <p>They thought of everything. The hotel upgrades, private transfers, even the surprise bottle
                        of wine. It was an incredible trip with all the lux details included.</p>
                    <small>Jordan S., Denver</small>
                </div>
            </div>
    </section>
    <section id="blog-article">
        <div class="blog-article-container">
            <article class="blog-article">
                <h3> Top 5 Family-Friendly Trips to Take This Year </h3>
                <p>Looking for the best trips for the family this year? Whether you’re planning a family beach trip
                    or looking to take on the mountains this fall, these five destinations deliver sunshine, scenic
                    views, and unforgettable experiences. </p>
                <a href="#" class="cta-button light">Read Article</a>
            </article>
        </div>
    </section>
    <section id="chat-cta">
        <div class="chat-cta-container">
            <h2>Ready to Make Your Out<br>of Office Message a Reality?</h2>
            <p>Our expert travel advisors are here to bring yoru dream trip to life. Whether you know exactly where
                you want to go or just need a little inspiration, we’ve go you.  </p>
            <a href="#" class="cta-button blue">Chat with Us</a>
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
            Visor.init({
                environment: 'sandbox',
                apptoken: 'f3899880-87eb-11ef-abb9-2bbf72490c1f',
                tab: '686eb620fabf4f0cb719e174',
            });
        }
    </script>
    <script src='https://chatwidget-flows2-0.visor.ai/socket.io/socket.io.js'></script>
@endsection
