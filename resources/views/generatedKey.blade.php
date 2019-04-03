@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Senha: {{ $gate['senha'] }}</h1>
            <p class="lead">
                Portão: {{ $gate['portao'] }} | Placa: {{ $gate['placa'] }} | Nota: {{ $gate['nfe'] }}
            </p>
        </div>
    </div>
    <a class="btn btn-primary" href="/" role="button">Voltar</a>
@endsection
