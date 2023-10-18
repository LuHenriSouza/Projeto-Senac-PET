@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('racas.index') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        <div class="row">
            <div class="card text-bg-primary mb-3 col-md-3">
                <div class="card-body">
                    <h5 class="card-title">Raça: {{ $raca->raca }} </h5>
                    <p class="card-text">
                        Espécie: {{ $raca->especies->especie }} <br>

                </div>
            </div>
        </div>
    </div>
@endsection
