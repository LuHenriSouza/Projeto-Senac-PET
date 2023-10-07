@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 50vh;">
            <a href="{{ route('animais.index') }}" class="col-md-4">
                <div class="text-center">
                    <div class="square bg-primary text-white text-center p-4">
                        <i class="fas fa-paw fa-3x"></i>
                        <h4 class="mt-2">Animais</h4>
                    </div>
                </div>
            </a>
            <a href="{{ route('racas.index') }}" class="col-md-4">
                <div class="text-center">
                    <div class="square bg-primary text-white text-center p-4">
                        <i class="fa-solid fa-dog fa-3x"></i>
                        <h4 class="mt-2">Raças</h4>
                    </div>
                </div>
            </a>
            <a href="{{ route('especies.index') }}" class="col-md-4">
                <div class="text-center">
                    <div class="square bg-primary text-white text-center p-4">
                        <i class="fa-brands fa-pagelines fa-3x"></i>
                        <h4 class="mt-2">Especies</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
