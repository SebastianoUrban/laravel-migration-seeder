<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                        @foreach ($trains as $train)
                            <li>
                                <ul class="list-unstyled">
                                    <li><h5 class="d-inline-block">Stazione di partenza</h5> <p class="d-inline-block">{{ $train['Stazione di partenza'] }}</p></li>
                                    <li><h5 class="d-inline-block">Orario di partenza</h5> <p class="d-inline-block">{{ $train['Orario di partenza'] }}</p></li>
                                    <li><h5 class="d-inline-block">>Stazione di arrivo</h5> <p class="d-inline-block">{{ $train['>Stazione di arrivo'] }}</p></li>
                                    <li><h5 class="d-inline-block">Orario di arrivo</h5> <p class="d-inline-block">{{ $train['Orario di arrivo'] }}</p></li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
