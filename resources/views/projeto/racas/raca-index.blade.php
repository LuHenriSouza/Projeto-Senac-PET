@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('work') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        <h1>Raças</h1>
        <a href="{{ route('racas.create') }}" class="mb-3 btn btn-primary">Cadastrar Raça</a>

        <table class="table table-light table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Raca</th>
                    <th scope="col">Especie</th>
                    <th scope="col">Quantidade Animais</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($racas as $raca)
                    <tr>
                        <th scope="row" style="max-width: 4em;">
                            <a href="{{ route('raca.show', $raca->id_raca) }}" class="btn btn-info m-1"
                                style="border-radius: 10%;">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="{{ route('raca.destroy', $raca->id_raca) }}" class="btn btn-danger m-1"
                                style="border-radius: 10%;">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </th>
                        <th scope="row"></th>
                        <td scope="row">{{ $raca->raca }}</td>
                        <td scope="row">{{ $raca->especies->especie }}</td>
                        <td scope="row">{{ $raca->animais->count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
