<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
    <style>
        body {
            background: #f0f5fe;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .color-form {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .color-form h3 {
            margin-top: 0;
        }

        .color-form p {
            color: #666;
        }

        .color-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .color-form button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .color-form button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form class="color-form" method="POST" action="{{ route('chamada-api') }}">
        @csrf
        <h3>Escolha o local de partida cidade e estado:</h3>
        <input type="text" name="paramFinal[param1]">

        <h3>Escolha os destinos</h3>
        <input type="text" name="paramFinal[param2]">

        <h3>Escolha a data de partida e retorno</h3>
        <p>Exemplo: 01/01/2023 a 10/01/2023 </p>
        <input type="text" name="paramFinal[param3]">

        <h3>Escolha o meio de transporte</h3>
        <p>Exemplo: Ônibus, carro, avião, moto:</p>
        <input type="text" name="paramFinal[param4]">

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</body>
</html>
