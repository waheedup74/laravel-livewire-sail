<?php

namespace App\Http\Livewire;
use GuzzleHttp\Client;
use Livewire\Component;
use Illuminate\Support\Collection;

class KanyeQuotes extends Component
{
    public $quotes;

    public function mount()
    {
        $this->fetchQuotes();
    }

    public function render()
    {
        return view('livewire.kanye-quotes');
    }

    public function fetchQuotes()
    {
        $this->quotes = collect();
        $client = new Client();
        for ($i=0; $i < 5; $i++) { 

            $response = $client->request('GET', 'https://api.kanye.rest/');
    
            if ($response->getStatusCode() === 200) {
                $quote = json_decode($response->getBody(), true);
    
                $this->quotes->push($quote);
            }
        }
    }

    public function refreshQuotes()
    {
        $this->fetchQuotes();
    }
}
