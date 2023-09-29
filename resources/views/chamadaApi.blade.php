@extends('layouts.app')
<div>
    <div class="container">
        <h1>Resposta do Modelo:</h1>
        <p>{{ $reply }}</p>

        <a href="{{ route('input') }}"> Elaborar novo roteiro de viagem</a>
    </div>
</div>
