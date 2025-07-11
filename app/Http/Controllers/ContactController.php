<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {

        $length = 6;
        $reservation = substr(str_shuffle(implode(range('A', 'Z'))), 0, $length);
        $db_id = 129;
        $campaign_id = 41;

        $url = env('GOCONTACT_URL');
        $token = $this->getToken();

        $searchContact = Http::withToken($token)->get($url . 'poll/api/contacts/phone', [
            'nums' => $request->phone,
            'campaigns' => $campaign_id,
        ]);

        $gocontactContacts = $searchContact->object();

        if (count($gocontactContacts) > 0) {
            $contactPatchResponse = Http::withToken($token)->patch($url . 'poll/api/databases/' . $db_id . '/contacts/' . $gocontactContacts[0]->id, [
                'contact' => $request->contact,
                'first_phone' => $request->phone,
                'email' => $request->email,
                'fields' => [
                    'field1' => $request->origin, //origin
                    'field2' => $request->destination, //destination
                    'field3' => $request->checkIn, //check-in
                    'field4' => $request->checkOut, //check-out
                    'field9' => $reservation
                ],
                'outcome_id' => 0,
                'direct_to_hopper' => true,
            ]);

            $contact = $contactPatchResponse->object();
        } else {


            $response = Http::withToken($token)->post($url . 'poll/api/databases/' . $db_id  . '/contacts', [
                'contact' => $request->contact,
                'first_phone' => $request->phone,
                'email' => $request->email,
                'outcome_id' => 0,
                'direct_to_hopper' => true,
                'fields' => [
                    'field1' => $request->origin, //origin
                    'field2' => $request->destination, //destination
                    'field3' => $request->checkIn, //check-in
                    'field4' => $request->checkOut, //check-out
                    'field9' => $reservation
                ]
            ]);

            $contact = $response->object();
        }

        if (isset($contact->id)) {
            $this->newReservation($request, $reservation);
            flash(__('Item successfully created'))->success();
        } else {
            flash(__('Whoops! Something went wrong.'))->error();
        }

        return redirect('travel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getToken()
    {
        $url = env('GOCONTACT_URL');
        $username = env('GOCONTACT_USERNAME');
        $password = env('GOCONTACT_PASSWORD');

        $response = Http::withBasicAuth($username, $password)->post($url . 'poll/auth/token');

        $token = $response->object();
        return $token->token;
    }

    public function newReservation(ContactRequest $request, $reservation)
    {

        $token = env('GOTRAVEL_TOKEN');
        $url = env('GOTRAVEL_URL');

        $response = Http::withToken($token)->post($url . 'reservations', [
            'name' => $request->contact,
            'id_number' => 1234,
            'phone' => $request->phone,
            'email' => $request->email,
            'arrival_date' => $request->checkIn,
            'departure_date' => $request->checkOut,
            'origin' => $request->origin,
            'destination' => $request->destination,
            'reservation_number' => $reservation,
            'status' => 'Confirmed'
        ]);

        $reservationResponse = $response->object();
        Log::info('New reservation created: ' . json_encode($reservationResponse));
    }
}
