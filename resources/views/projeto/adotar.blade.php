@extends('layouts.main')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header2">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase mb-lg-4" style="color: #00ab00">Adote Agora</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Saiba como adotar</h1>
                    <p class="fs-4 text-white mb-lg-4">Para adotar é preciso seguir os passos adiantes:</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    {{-- CONTENT --}}
    <div class="container" id="elemento-alvo">
        <div class="col-lg-7">
            <form action="" method="POST">
                @csrf
                <div class="bg-light p-4">
                    <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">1º Passo</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="false">2º Passo</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                            <p class="mb-0">
                                @include('components.Forms.cadastro-pessoa')
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <p class="mb-0">
                                @include('components.Forms.cadastro-pessoa-detalhado')
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- /CONTENT --}}
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var botaoDesejado = $("#pills-2-tab");
            var meuBotao = $("#botaoProximo"); // referenciando um botão em [cadastro-pessoa.blade.php] !

            meuBotao.on("click", function() {
                var elementoAlvoID = meuBotao.data("target");
                var elementoAlvo = $(elementoAlvoID);

                // var campo1 = $("#campo-1").val();
                // var campo2 = $("#campo-2").val();
                // var campo3 = $("#campo-3").val();
                // var campo4 = $("#campo-4").val();
                // var campo5 = $("#campo-5").val();

                // if (!campo1) {
                //     $("#erro-campo1").text("Endereço é obrigatório.");
                // }
                // if (!campo2) {
                //     $("#erro-campo2").text("CEP é obrigatório.");
                // }
                // if (!campo3) {
                //     $("#erro-campo3").text("Cidade é obrigatório.");
                // }
                // if (!campo4) {
                //     $("#erro-campo4").text("Estado é obrigatório.");
                // }
                // if (!campo5) {
                //     $("#erro-campo5").text("Telefone é obrigatório.");
                // }
                // if (!campo1 || !campo2 || !campo3 || !campo4 || !campo5) {
                //     return;
                // }

                if (elementoAlvo.length) {
                    // Role a página até o elemento-alvo
                    elementoAlvo[0].scrollIntoView({
                        behavior: "smooth" // Para uma rolagem suave, adicione este parâmetro
                    });

                    // Dispare o clique no botão desejado
                    botaoDesejado.click();
                }
            });
        });
    </script>
    <script></script>
@endsection
