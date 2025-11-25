<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FinancialController extends Controller
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

        $loanTypes = [
            'auto' => __('Auto'),
            'home' => __('Home'),
            'personal' => __('Personal'),
            'credit' => __('Credit Application'),
        ];

        $employmentStatuses = [
            'Full-time' => __('Full Time'),
            'Part-time' => __('Part Time'),
            'Self-employed' => __('Self-Employed')
        ];

        $contactMethods = [
            'email' => __('Email'),
            'sms' => __('SMS'),
        ];

        $frontAgents = $this->getDemoUsers();

        return view('financial.index', compact('loanTypes', 'locations', 'employmentStatuses', 'contactMethods', 'frontAgents'));
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
    public function store(Request $request)
    {
        $db_id = $request->agent;

        $url = env('GOCONTACT_URL');
        $token = $this->getToken();

        $searchContact = Http::withToken($token)->get($url . 'poll/api/databases/' . $db_id . '/contacts', [
            'phone_number' => $request->phone,
        ]);

        $request['status'] = 'Requested';
        $gocontactContacts = $searchContact->object();

        $debtCollection = $this->newDebtCollection($request);

        if (count($gocontactContacts) > 0) {
            $contactPatchResponse = Http::withToken($token)->patch($url . 'poll/api/databases/' . $db_id . '/contacts/' . $gocontactContacts[0]->id, [
                'contact' => $request->name,
                'first_phone' => $request->phone,
                'fields' => [
                    'field1' => $debtCollection->id
                ],
                'outcome_id' => 0,
                'direct_to_hopper' => true,
            ]);

            $contact = $contactPatchResponse->object();
        } else {


            $response = Http::withToken($token)->post($url . 'poll/api/databases/' . $db_id  . '/contacts', [
                'contact' => $request->name,
                'first_phone' => $request->phone,
                'outcome_id' => 0,
                'direct_to_hopper' => true,
                'fields' => [
                    'field1' => $debtCollection->id
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

        return redirect('financial/' . $debtCollection->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $token = env('GOTRAVEL_TOKEN');
        $url = env('GOTRAVEL_URL');

        $response = Http::withToken($token)->get($url . 'debt-collection/' . $id);

        $debtCollectionObject = $response->object();
        $debtCollection = $debtCollectionObject->response->data;

        return view('financial.confirmation', compact('debtCollection'));
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

    public function newDebtCollection(Request $request)
    {

        $token = env('GOTRAVEL_TOKEN');
        $url = env('GOTRAVEL_URL');

        $response = Http::withToken($token)->post($url . 'debt-collection', $request->all());

        $collectionResponse = $response->object();

        return $collectionResponse->data;
    }

    public function getDemoUsers()
    {
        $token = env('GOTRAVEL_TOKEN');
        $url = env('GOTRAVEL_URL');

        $locale = app()->getLocale();

        // Asignar campaign_id dinámico según el idioma
        $campaign_id = match ($locale) {
            'es' => 'GoFinancial ES',
            'en' => 'GoFinancial EN',
            'pt' => 'GoFinancial PT',
            default => 'GoFinancial', // fallback si llega otro idioma
        };


        $response = Http::withToken($token)->post($url . 'go_demo_users/search', [
            'campaign_id' => $campaign_id,
        ]);

        return $response->object();
    }
}
