<div>
    @foreach ($quotes as $quote)
        <p>{{ $quote['quote'] }}</p>
    @endforeach

    <div >
        <button wire:click="refreshQuotes">Refresh</button>
    </div>

    <div wire:poll.60000="refreshQuotes">
     Current time: {{ now() }}
    </div>
</div>

