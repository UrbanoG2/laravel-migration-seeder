<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="contained">
            @foreach ($trains as $train)

                <h1>{{ $train->company }}</h1>
                <ul>
                    <li>Stazione di partenza: {{ $train->startingStation }}</li>
                    <li>Stazione di arrivo: {{ $train->arrivingStation }}</li>
                    {{-- <li>Data di partenza
                        <ul>
                            <li>Data di partenza: {{ $train->startingDate }} alle {{ $train->startingTime }} </li>
                        </ul>

                        <ul>
                            <li>Data di arrivo: {{ $train->arrivingDate }} alle {{ $train->arrivingTime }} </li>
                        </ul>
                    </li>
                    <li>Codice: {{ $train->trainCode }}</li>

                    <li>
                        @if ($train->inTime == false)
                            Treno in ritardo
                        @else 
                            Treno in orario
                        @endif
                    </li> --}}

                    <li>Codice: {{ $train->trainCode }}</li>

                </ul>

                <button><a href="{{ route('show', $train) }}">Show more</a></button>
                {{-- @dd($train) --}}
            @endforeach
        </div>
    </div>
</body>
</html>