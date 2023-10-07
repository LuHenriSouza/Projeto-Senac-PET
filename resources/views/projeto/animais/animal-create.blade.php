@extends('layouts.main')
@section('content')
    @include('components.Forms.cadastro-animal')
@endsection
@section('scripts')
<script>
    function formatarData(input){
        var numero = input.value.replace(/\D/g, '');

        input.value = numero;
    }
</script>
@endsection
