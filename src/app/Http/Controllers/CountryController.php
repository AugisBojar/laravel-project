<?php


namespace App\Http\Controllers;


use App\Services\CoronaStatusService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CountryController
{
    private CoronaStatusService $coronaStatusService;

    public function __construct(CoronaStatusService $coronaStatusService)
    {
        $this->coronaStatusService = $coronaStatusService;
    }

    public function show(Request $request): View
    {
        $request->validate([
            'country' => ['required', 'min:2','max:2', 'string'],
        ]);

        $country = mb_strtolower($request->get('country'));

        $responseText = $this->coronaStatusService->isCountryAffected($country) ? 'Affected' : 'Not affected';

        return view('country.index', [
            'title' => 'Affected countries',
            'response' => $responseText,
        ]);
    }
}

