<!DOCTYPE html>
<head>
    <title>
        @if (Route::currentRouteName() == 'input')
            Formulario 
        @elseif(Route::currentRouteName() == 'chamada-api')
            Roteiro
        @else
            Titulo padrão
        @endif
    </title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Icone do titulo --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    {{-- Scripts Js --}}
    <script src="public/js/scripts.js"></script>
</head>
    <body class="font-sans antialiased">
    

    </body>
</html>
