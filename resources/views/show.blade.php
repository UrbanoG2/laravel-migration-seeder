<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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
</body>
</html>