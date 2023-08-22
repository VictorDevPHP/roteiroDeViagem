<!DOCTYPE html>
<html>
<head>
    <title>Chamada de API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resposta do Modelo:</h1>
        <p>{{ $reply }}</p>

        <a href="{{ route('input') }}"> Elaborar novo roteiro de viagem</a>
    </div>
</body>
</html>
