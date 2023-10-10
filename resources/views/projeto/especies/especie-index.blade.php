@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('work') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        <h1>Especies</h1>
        <a href="{{ route('especies.create') }}" class="mb-3 btn btn-primary">Cadastrar Especie</a>
        <form action="" method="GET">
            <input type="text" class="form-control bg-light border-0 px-4" placeholder="Pesquisa" style="height: 55px;"
                name="search" id="search" value="{{ old('search',request()->get('search')) }}">
            <button type="submit" href="%" class="btn btn-primary my-2 float-end">Pesquisar</button>
            @if (request()->get('search') != '')
                <a class="btn btn-primary col-md-1 my-2 float-end mx-2" href="{{ route('especies.index') }}">
                    Limpar
                </a>
            @endif
        </form>
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
