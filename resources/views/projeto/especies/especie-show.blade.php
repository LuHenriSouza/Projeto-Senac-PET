@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('especies.index') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        <div class="row">
            <div class="card text-bg-primary mb-3 col-md-3">
                <div class="card-body">
                    <h5 class="card-title"> Espécie: {{ $especie->especie }} </h5>

                </div>
            </div>
        </div>
    </div>
@endsection
