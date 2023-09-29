<div>
    @extends('layouts.app')
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
    
</div>
