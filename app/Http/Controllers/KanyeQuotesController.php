<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;


class KanyeQuotesController extends Controller
{
    public $quotes;

    public function index(): JsonResponse
    {
        $this->quotes = collect();
        $client = new Client();

        for ($i=0; $i < 5; $i++) {

            $response = $client->request('GET', 'https://api.kanye.rest/');
    
            if ($response->getStatusCode() === 200) {
                $quote = json_decode($response->getBody(), true);
    
                $this->quotes->push($quote);
            }else{
                return response()->json(['error' => 'Failed to fetch quotes.'], 500);
            }
        }
        $answers = $this->quotes;

        return response()->json(compact('answers'));

    }
}
