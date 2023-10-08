@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>Especies</h1>
        <a href="{{ route('especies.create') }}" class="mb-3 btn btn-primary">Cadastrar Especie</a>

        <table class="table table-light table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Espécie</th>
                    <th scope="col">Quantidade Raças</th>
                    <th scope="col">Quantidade Animais</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($especies as $especie)
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">{{ $especie->especie }}</td>
                        <td scope="row"> {{ $especie->raca->count() }} </td>
                        <td scope="row"> {{ $especie->animais->count() }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
