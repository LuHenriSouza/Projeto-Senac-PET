@extends('layouts.main')
@section('content')
    <div class="container">
        <table class="table table-light table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Animal</th>
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
                        <th scope="row"></th>
                        <td scope="row">{{ $animal->nome }}</td>
                        <td scope="row">{{ $animal->raca }}</td>
                        <td scope="row">{{ $animal->especie }}</td>
                        <td scope="row">{{ $animal->cor }}</td>
                        <td scope="row">{{ $animal->idade->diffInYears(\Carbon\Carbon::now()) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
