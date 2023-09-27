@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
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
    <!-- Banner End -->

    {{-- CONTENT --}}
    <div class="container" id="elemento-alvo">
        <div class="col-lg-7">
            <form action="" method="GET">
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
                if ($('#rua').val() && $('#cep').val().length === 8) {
                    var elementoAlvoID = meuBotao.data("target");
                    var elementoAlvo = $(elementoAlvoID);

                    if (elementoAlvo.length) {
                        // Role a página até o elemento-alvo
                        elementoAlvo[0].scrollIntoView({
                            behavior: "smooth" // Para uma rolagem suave, adicione este parâmetro
                        });

                        // Dispare o clique no botão desejado
                        botaoDesejado.click();
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").on('input', function() {
                if ($(this).val().length === 8) {
                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if (validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#rua").val("...");
                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");
                            $("#ibge").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(
                                dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                    $("#ibge").val(dados.ibge);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Selecione o botão e desabilite-o inicialmente
            var meuBotao = $("#botaoProximo");
            var botao2passo = $("#pills-2-tab");
            meuBotao.prop("disabled", true);
            botao2passo.prop("disabled", true);

            // Selecione todos os campos de entrada no formulário
            var camposDeEntrada = $("input.parte1");

            // Adicione um ouvinte de evento de entrada para cada campo de entrada
            camposDeEntrada.on("input", function() {
                // Verifique se todos os campos de entrada têm um valor
                var todosPreenchidos = true;
                camposDeEntrada.each(function() {
                    if ($(this).val() === "") {
                        todosPreenchidos = false;
                        return false; // Sai do loop quando um campo estiver vazio
                    }
                });

                // Ative ou desative o botão com base na condição
                meuBotao.prop("disabled", !todosPreenchidos);
                botao2passo.prop("disabled", !todosPreenchidos);
            });

            // O código acima irá desabilitar o botão até que todos os campos estejam preenchidos
            // O botão será ativado automaticamente quando todos os campos estiverem preenchidos
        });
    </script>
@endsection
