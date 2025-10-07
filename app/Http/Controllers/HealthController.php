<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $locations = [
            'Miami' => 'Miami',
            'Houston' => 'Houston',
            'San Diego' => 'San Diego',
            'New York' => 'New York',
        ];

        $specialties = [
            'General Medicine' => 'General Medicine',
            'Pediatrics' => 'Pediatrics',
            'Orthopedics' => 'Orthopedics',
            'Psychiatry' => 'Psychiatry',
        ];

        return view('health.index', compact('locations', 'specialties'));
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
    public function store(HealthRequest $request)
    {
        $db_id = 420;
        $campaign_id = 131;

        $url = env('GOCONTACT_URL');
        $token = $this->getToken();

        $searchContact = Http::withToken($token)->get($url . 'poll/api/contacts/phone', [
            'nums' => $request->phone,
            'campaigns' => $campaign_id,
        ]);

        $gocontactContacts = $searchContact->object();

        $appointment = $this->newAppointment($request);

        if (count($gocontactContacts) > 0) {
            $contactPatchResponse = Http::withToken($token)->patch($url . 'poll/api/databases/' . $db_id . '/contacts/' . $gocontactContacts[0]->id, [
                'contact' => $request->contact,
                'first_phone' => $request->phone,
                'fields' => [
                    'field1' => $appointment->id, //appointment_id
                    'field2' => $request->date . ' ' . $request->time, //appointment_date
                ],
                'outcome_id' => 0,
                'direct_to_hopper' => true,
            ]);

            $contact = $contactPatchResponse->object();
        } else {


            $response = Http::withToken($token)->post($url . 'poll/api/databases/' . $db_id  . '/contacts', [
                'contact' => $request->contact,
                'first_phone' => $request->phone,
                'outcome_id' => 0,
                'direct_to_hopper' => true,
                'fields' => [
                    'field1' => $appointment->id, //appointment_id
                    'field2' => $request->date . ' ' . $request->time, //appointment_date
                ]
            ]);

            $contact = $response->object();
        }

        if (isset($contact->id)) {
            //$this->newReservation($request, $reservation);
            flash(__('Item successfully created'))->success();
        } else {
            flash(__('Whoops! Something went wrong.'))->error();
        }

        return redirect('health/confirmation/' . $appointment->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $token = env('GOTRAVEL_TOKEN');
        $url = env('GOTRAVEL_URL');

        $response = Http::withToken($token)->get($url . 'appointments/' . $id);

        $appointment = $response->object();

        return view('health.confirmation', compact('appointment'));
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

    public function newAppointment(Request $request)
    {

        $token = env('GOTRAVEL_TOKEN');
        $url = env('GOTRAVEL_URL');

        $response = Http::withToken($token)->post($url . 'patients', $request->all());

        $appointmentResponse = $response->object();

        return $appointmentResponse->response->data->appointment;
    }
}
