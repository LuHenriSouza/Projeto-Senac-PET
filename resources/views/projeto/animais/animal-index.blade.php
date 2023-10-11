@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('work') }}">
            <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
        </a>
        @if (session('deleted'))
            <div class="alert alert-danger" role="alert">
                {!! session('deleted') !!}
            </div>
        @endif
        <h1>Animais</h1>
        <a href="{{ route('animais.create') }}" class="mb-3 btn btn-primary">Cadastrar Animal</a>
        {{ $animais->links() }}
        <table class="table table-light table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Espécie</th>
                    <th scope="col">cor</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animais as $animal)
                    <tr>
                        <th scope="row" style="max-width: 4em;">
                            <a href="{{ route('animais.show', $animal->id_animal) }}" class="btn btn-info m-1"
                                style="border-radius: 10%;">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="{{ route('animais.destroy', $animal->id_animal) }}" class="btn btn-danger m-1"
                                style="border-radius: 10%;">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </th>
                        <td scope="row">{{ $animal->nome }}</td>
                        <td scope="row">{{ $animal->raca->raca }}</td>
                        <td scope="row">{{ $animal->raca->especies->especie }}</td>
                        <td scope="row">{{ $animal->cor }}</td>
                        <td scope="row">{{ $animal->idade->diffInYears(\Carbon\Carbon::now()) }}</td>
                        <td scope="row">{{ $animal->status ? 'Adotado' : 'Para Adotar' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
