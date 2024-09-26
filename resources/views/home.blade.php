<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Migration Seeder</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Treni in Partenza Oggi</h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>{{ $train->azienda }}</strong></h5>
                            <tr>
                                <td class="card-text"><strong>Partenza;</strong> {{ $train->stazione_partenza }}</td>
                                <td class="card-text"><strong>Destinazione:</strong> {{ $train->stazione_arrivo }}</td>
                                <td class="card-text"><strong>Orario di partenza:</strong> {{ $train->orario_partenza }}</td>
                                <td class="card-text"><strong>Orario di arrivo:</strong> {{ $train->orario_arrivo }}</td>
                                <td class="card-text"><strong>Codice:</strong> {{ $train->codice_treno }}</td>
                                <td class="card-text"><strong>N-Carrozze:</strong> {{ $train->numero_carrozze }}</td>
                                <td class="card-text"><strong>In orario:</strong> {{ $train->in_orario }}</td>
                                <td class="card-text"><strong>Cancellati:</strong> {{ $train->cancellato }}</td>
                            </tr>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>