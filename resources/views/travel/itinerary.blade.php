@extends('layouts.travel')

@section('title', 'Travel Itinerary')


@section('main-content')
    <main class="itinerary-page">
        <section class="hero">
            <h1>Your Greek Adventure</h1>
            <h4>Here's your confirmation details, enjoy your trip!</h4>
        </section>
        <section id="form">
            <div class="form-container">
                <div class="itinerary-menu-btns">
                    <button class="itinerary-btn">Overview</button>
                    <button class="itinerary-btn">Daily Itinerary</button>
                    <button class="itinerary-btn active">Flights</button>
                    <button class="itinerary-btn">Hotels</button>
                    <button class="itinerary-btn">Activities</button>
                    <button class="itinerary-btn">Travel Docs</button>
                </div>
                <div class="add-options">
                    <div class="option">
                        <input disabled type="radio" name="options" id="option1" value="option1" checked>
                        <label for="option1">One way</label>
                    </div>
                    <div class="option">
                        <input disabled type="radio" name="options" id="option2" value="option2">
                        <label for="option2">Round trip</label>
                    </div>
                    <div class="option">
                        <div class="passenger-count">
                            <label for="passengerNumber">Passengers:</label>
                            <button type="button" class="passenger-btn" id="decreasePassenger" disabled>-</button>
                            <input disabled type="number" id="passengerNumber" name="passengerNumber" value="1" min="1" max="10" readonly>
                            <button type="button" class="passenger-btn" id="increasePassenger" disabled>+</button>
                        </div>
                    </div>
                </div>
                <form disabled action="#" method="post">
                    <div class="it-field">
                        <label for="from">From:</label>
                        <input disabled type="text" id="from" name="from" value="{{ $reservation->origin }}" required>
                    </div>
                    <div class="it-field">
                        <label for="to">To:</label>
                        <input disabled type="text" id="to" name="to" value="{{ $reservation->destination }}" required>
                    </div>
                    <div class="it-field">
                        <label for="departure-date">Departure:</label>
                        <input disabled type="date" id="departure-date" name="departure-date" value="{{ $reservation->arrival_date }}" required>
                    </div>
                    <div class="it-field">
                        <label for="return-date">Return:</label>
                        <input disabled type="date" id="return-date" name="return-date" value="{{ $reservation->departure_date }}" required>
                    </div>

                    <button type="submit" class="cta-button" aria-label="Submit">
                        <svg width="61" height="30" viewBox="0 0 61 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.31725 26.0912C6.31558 26.0922 6.31375 26.0928 6.31191 26.094C5.63949 26.4431 5.34745 27.2499 5.6415 27.9481C5.93638 28.6486 6.721 29.0041 7.44268 28.7642L27.7888 22.001L23.9844 28.208C23.7081 28.6589 23.7665 29.2386 24.1273 29.6255C24.4882 30.0122 25.0629 30.1113 25.5328 29.8672L29.5225 27.7959C29.6371 27.7365 29.7411 27.6586 29.8304 27.5652L41.6499 15.2301L56.2367 7.62597C61.7611 4.65067 61.1211 2.36352 60.7935 1.7336C60.5395 1.24514 59.9716 0.590191 58.7098 0.243865C57.4299 -0.107465 55.7007 -0.0794384 53.4245 0.329613C52.6646 0.466074 52.2451 0.454563 51.8009 0.442385C50.2395 0.399678 49.1804 0.504276 43.9216 3.23434L15.1595 18.1675L4.00546 12.3841C3.58484 12.1661 3.08441 12.1662 2.6638 12.3848L0.784305 13.3607C0.397419 13.5615 0.121072 13.9251 0.0312385 14.3513C-0.0585951 14.7777 0.0476022 15.2218 0.320443 15.5613L8.06216 25.1951L6.31725 26.0912Z" fill="white"/>
                        </svg>
                    </button>
                </form>
                <p class="confirmation-nmbr">Your confirmation number: <strong>{{ $reservation->reservation_number }}</strong></p>
            </div>
        </section>
        <section id="itinerary-cards">
            <div class="it-card">
                <h4>Departing Flight Information • Sun, Jul 12 </h4>
                <div class="it-card-grid">
                    <div class="info-box">
                        <h4>11:32 AM • Austin-Bergstrom International Airport (AUS)</h4>
                        <small>Travel time: 3 hr 38 min  •  2 hr 25 min layover • Philadelphia International Airport (PHL)</small>
                        <h4>4:10 PM • Philadelphia International Airport (PHL)</h4>
                    </div>
                    <div class="nobox-info">
                        <h3 class="price">$150*</h3>
                        <button class="book-btn">Book</button>
                        <small>
                            Average legroom (30 in)<br>
                            Wi-Fi for a fee<br>
                            In-seat power outlet<br>
                            Free streaming
                        </small>
                    </div>
                </div>
                <p>American • Economy • Airbus A333 • AA 944</p>
            </div>
            <div class="it-card">
                <div class="it-card-grid">
                    <div class="info-box">
                        <h4>6:35 PM • Philadelphia International Airport (PHL)</h4>
                        <small>Travel time: 7 hr 5 min • Overnight ⚠  •   3 hr 35 min layover • London (LHR)</small>
                        <h4>6:40 AM+1 • Heathrow Airport (LHR)</h4>
                    </div>
                    <div class="nobox-info">
                        <h3 class="price">$150*</h3>
                        <button class="book-btn">Book</button>
                        <small>
                            Average legroom (30 in)<br>
                            Wi-Fi for a fee<br>
                            In-seat power outlet<br>
                            Free streaming
                        </small>
                    </div>
                </div>
                <p>British Airways • Economy • Airbus A355 • BA 66</p>
            </div>
            <div class="it-card">
                <div class="it-card-grid">
                    <div class="info-box">
                        <h4>10:15 AM+1 • Heathrow Airport (LHR)</h4>
                        <small>Travel time: 3 hr 55 min</small>
                        <h4>4:10PM +1 • Santorini Airport (JTR)  </h4>
                    </div>
                    <div class="nobox-info">
                        <h3 class="price">$150*</h3>
                        <button class="book-btn">Book</button>
                        <small>
                            Average legroom (30 in)<br>
                            Wi-Fi for a fee<br>
                            In-seat power outlet<br>
                            Free streaming
                        </small>
                    </div>
                </div>
                <p>British Airways • Economy • Airbus A320 • BA 54</p>
            </div>
            <br><br>
             <div class="it-card orng">
                <h4>Return Flight Information • Sun, Jul 21 </h4>
                <div class="it-card-grid">
                    <div class="info-box">
                        <h4>6:00 AM • Santorini Airport (JTR)</h4>
                        <small>Travel time: 45 minutes   •  6 hr 15 min layover • Athens (ATH)</small>
                        <h4>6:45 AM • Athens International Airport “Eleftherios Venizelos” (ATH)</h4>
                    </div>
                    <div class="nobox-info">
                        <h3 class="price">$150*</h3>
                        <button class="book-btn">Book</button>
                        <small>
                            Average legroom (30 in)<br>
                            Wi-Fi for a fee<br>
                            In-seat power outlet<br>
                            Free streaming
                        </small>
                    </div>
                </div>
                <p>Aegean • Economy • Airbus A320neo • A3 351</p>
            </div>
            <div class="it-card orng">
                <div class="it-card-grid">
                    <div class="info-box">
                        <h4>1:00 PM • Athens International Airport “Eleftherios Venizelos” (ATH)</h4>
                        <small>Travel time: 11 hr 20 min • 2 hr 20 min layover • Philadelphia International Airport (PHL)  </small>
                        <h4>5:20 PM • Philadelphia International Airport (PHL)</h4>
                    </div>
                    <div class="nobox-info">
                        <h3 class="price">$150*</h3>
                        <button class="book-btn">Book</button>
                        <small>
                            Average legroom (30 in)<br>
                            Wi-Fi for a fee<br>
                            In-seat power outlet<br>
                            Free streaming
                        </small>
                    </div>
                </div>
                <p>American • Economy • Boeing 787 • AA 759  </p>
            </div>

            <div class="it-card orng">
                <div class="it-card-grid">
                    <div class="info-box">
                        <h4>7:40 PM • Philadelphia International Airport (PHL)</h4>
                        <small>Travel time: 4 hr 1 min</small>
                        <h4>10:41 PM • Austin-Bergstrom International Airport (AUS)</h4>
                    </div>
                    <div class="nobox-info">
                        <h3 class="price">$150*</h3>
                        <button class="book-btn">Book</button>
                        <small>
                            Average legroom (30 in)<br>
                            Wi-Fi for a fee<br>
                            In-seat power outlet<br>
                            Free streaming
                        </small>
                    </div>
                </div>
                <p>British Airways • Economy • Airbus A320 • BA 54</p>
            </div>
            <br><br><br>
        </section>
    </main>
@endsection

@section('custom-scripts')
    <div id='example-widget-container'>
        <script src='https://chatwidget-flows2-0.visor.ai/dist/js/visor.js'></script>
    </div>
    <script>
        if (typeof Visor !== 'undefined' && Visor) {
            Visor.init({
                apptoken: 'f3899880-87eb-11ef-abb9-2bbf72490c1f',
                tab: '686eb620fabf4f0cb719e174',
            });
        }
    </script>
    <script src='https://chatwidget-flows2-0.visor.ai/socket.io/socket.io.js'></script>
@endsection
