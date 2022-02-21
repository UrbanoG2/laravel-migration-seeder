@extends('base')

@section('content')

<div class="contained">
    <ul>
        <h1>{{ $train->startingStation }} - {{ $train->arrivingStation }} - {{ $train->trainCode }}</h1>
        <li>Data di partenza
            <ul>
                <li>Data di partenza: {{ $train->startingDate }} alle {{ $train->startingTime }} </li>
            </ul>

            <ul>
                <li>Data di arrivo: {{ $train->arrivingDate }} alle {{ $train->arrivingTime }} </li>
            </ul>
        </li>

        <li>
            @if ($train->inTime == false)
                Treno in ritardo
            @else 
                Treno in orario
            @endif
        </li>
    </ul>

    <button><a href="">Acquista</a></button>
</div>


@endsection