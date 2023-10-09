@extends('layouts.main')
@section('content')
    @include('components.Forms.cadastro-animal')
@endsection
@section('scripts')
    <script>
        function formatarData(input) {
            var numero = input.value.replace(/\D/g, '');

            if (numero.length >= 3) {
                numero = numero.substring(0, 2) + '/' + numero.substring(2);
            }
            if (numero.length >= 6) {
                numero = numero.substring(0, 5) + '/' + numero.substring(5);
            }

            input.value = numero;
        }
    </script>
@endsection
