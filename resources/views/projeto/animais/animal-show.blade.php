@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('animais.index') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        <div class="row">
            <div class="card text-bg-primary mb-3 col-md-3">
                <div class="card-body">
                    <h5 class="card-title">Nome: {{ $animal->nome }}</h5>
                    <p class="card-text">
                        Status: {{ $animal->status ? 'Adotado' : 'Para Adotar' }}<br>
                        <br>
                        Espécie: {{ $animal->raca->especies->especie }} <br>
                        Raça: {{ $animal->raca->raca }} <br>
                        <br>
                        Cor: {{ $animal->cor }} <br>
                        <br>
                        Nacimento: {{ $animal->idade->format('d / m / Y') }} <br>
                        Idade: {{ $animal->idade->diffInYears(\Carbon\Carbon::now()) }} <br>
                    </p>
                </div>
            </div>
            <div class="card text-bg-primary mb-3 col-md-9">
                <div class="card-body">
                    <h5 class="card-title">Observações</h5>
                    <p>{{ $animal->observacoes }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
