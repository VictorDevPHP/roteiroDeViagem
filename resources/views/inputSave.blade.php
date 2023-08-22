<header>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
</header>
<body>
    <form class="color-form" method="POST" action="{{ route('chamada-api') }}">
        <div >
            @csrf
            <div>
                <h3>Escolha o local de partida cidade e estado:</h3>
                <input type="text" name="paramFinal[param1]">
                {{-- <select name="paramFinal[param1]">
                    <option value="Aumentar Trafego">Aumentar Trafego</option>
                    <option value="Gerar Leads">Gerar Leads</option>
                    <option value="Aumentar Vendas">Aumentar Vendas</option>
                </select> --}}
            </div>

            <div>
                <h3>Escolha os destinos</h3>
                <input type="text" name="paramFinal[param2]">
                {{-- <select name="paramFinal[param2]">
                    <option value="valor_opcao4">Opção 4</option>
                    <option value="valor_opcao5">Opção 5</option>
                    <option value="valor_opcao6">Opção 6</option>
                </select> --}}

            </div>

            <div>
                <h3>Escolha a data de partida e retoro </h3>
                <p>Exemplo: 01/01/2023 a 10/01/2023 </p>
                <input type="text" name="paramFinal[param3]">
                {{-- <select name="paramFinal[param3]">
                    <option value="valor_opcao7">Opção 7</option>
                    <option value="valor_opcao8">Opção 8</option>
                    <option value="valor_opcao9">Opção 9</option>
                </select> --}}
            </div>
            <div>
                <h3>Escolha o meio de transporte</h3>
                <p>Exemplo: Onibus, carro, avião, moto:</p>
                <input type="text" name="paramFinal[param4]">
                {{-- <select name="paramFinal[param2]">
                    <option value="valor_opcao4">Opção 4</option>
                    <option value="valor_opcao5">Opção 5</option>
                    <option value="valor_opcao6">Opção 6</option>
                </select> --}}

            </div>

            <div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>
    </form>
</body>
<style>
    body {
        background: cornflowerblue;
    }

    .h3 .p{
        color: #f0f5fe;
    }
    input{

    }
</style>
