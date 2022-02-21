@extends('base')

@section('content')
    <div class="container">
        
        @foreach ($trains as $train)

            <div class="contained">

                <h1>{{ $train->company }}</h1>
                <ul>
                    <li>Stazione di partenza: {{ $train->startingStation }}</li>
                    <li>Stazione di arrivo: {{ $train->arrivingStation }}</li>
                
                    <li>Codice: {{ $train->trainCode }}</li>

                </ul>

                <button><a href="{{ route('show', $train) }}">Show more</a></button>
                {{-- @dd($train) --}}

            </div>

        @endforeach
    </div>
@endsection

   