@extends('layouts.main')
@section('content')
    <div class="container">
        <table class="table table-light table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Racas</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($racas as $raca)
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">{{ $raca->raca }}</td>
                        <td scope="row"> N/A </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
