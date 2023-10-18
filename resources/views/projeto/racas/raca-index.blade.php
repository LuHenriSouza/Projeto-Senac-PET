@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('work') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        <h1>Raças</h1>
        <a href="{{ route('racas.create') }}" class="mb-3 btn btn-primary">Cadastrar Raça</a>
        <form action="" method="GET">
            <input type="text" class="form-control bg-light border-0 px-4" placeholder="Pesquisa" style="height: 55px;"
                name="search" id="search" value="{{ old('search', request()->get('search')) }}">
            <button type="submit" href="%" class="btn btn-primary my-2 float-end">Pesquisar</button>
            @if (request()->get('search') != '')
                <a class="btn btn-primary col-md-1 my-2 float-end mx-2" href="{{ route('racas.index') }}">
                    Limpar
                </a>
            @endif
        </form>

        <table class="table table-light table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Espécie</th>
                    <th scope="col">Quantidade Animais</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($racas as $raca)
                    <tr>
                        <th scope="row" style="max-width: 4em;">
                            <a href="{{ route('animais.show', $raca->id_raca) }}" class="btn btn-info m-1"
                                style="border-radius: 10%;">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="{{ route('animais.destroy', $raca->id_raca) }}" class="btn btn-danger m-1"
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
