@extends('layouts.main')
@section('content')
    {{-- @include('components.Forms.cadastro-pessoa') --}}
    {{-- @include('components.Forms.cadastro-pessoa-detalhado') --}}
    @include('components.dashboard.banner')

    @include('components.dashboard.sobrenos')

    {{-- @include('components.dashboard.servicos') --}}

    {{-- @include('components.dashboard.ofertas') --}}

    @include('components.dashboard.time')

    @include('components.dashboard.comentarios')

@endsection
