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
        </div>
    </div>
    {{-- /CONTENT --}}
@endsection
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var botaoDesejado = document.getElementById("pills-2-tab");

            var meuBotao = document.getElementById(
                "botaoProximo"); // referenciando um botao em [cadastro-pessoa.blade.php] !

            // Adicione um ouvinte de clique ao botão personalizado
            meuBotao.addEventListener("click", function() {
                var elementoAlvoID = meuBotao.getAttribute("data-target");
                var elementoAlvo = document.querySelector(elementoAlvoID);
                if (elementoAlvo) {
                    // Role a página até o elemento-alvo
                    elementoAlvo.scrollIntoView({
                        behavior: "smooth" // Para uma rolagem suave, adicione este parâmetro
                    });
                    // Dispare o clique no botão desejado
                    botaoDesejado.click();
                }
            });
        });
    </script>
@endsection
