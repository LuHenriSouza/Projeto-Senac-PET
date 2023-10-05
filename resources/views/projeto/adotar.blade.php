@extends('layouts.main')
@section('content')
    @include('components.Forms.cadastro-pessoa')

    @include('components.Forms.cadastro-pessoa-detalhado')
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var botaoDesejado = $("#pills-2-tab");
            var meuBotao = $("#botaoProximo"); // referenciando um botão em [cadastro-pessoa.blade.php] !

            meuBotao.on("click", function() {
                if ($('#rua').val() && $('#cep').val().length === 8 && $('#campo-5').val().length > 14) {
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
                $("#cep").val("");
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
                $('#cep').prop("disabled", false);
                $('#custom-loader-cep').addClass("d-none");
            }

            //Quando o campo cep perde o foco.
            $("#cep").on('input', function() {

                if ($(this).val().length === 8) {

                    $(this).prop("disabled", true);
                    $('#custom-loader-cep').removeClass("d-none");
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
                                    $('#cep').prop("disabled", false);
                                    $('#custom-loader-cep').addClass("d-none");
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
    <script>
        function formatarTelefone(input) {
            // Remove qualquer caractere que não seja dígito
            var numeroTelefone = input.value.replace(/\D/g, '');

            // Formate o número de telefone de acordo com o tamanho
            if (numeroTelefone.length >= 3) {
                numeroTelefone = '(' + numeroTelefone.substring(0, 2) + ') ' + numeroTelefone.substring(2);
            }
            if (numeroTelefone.length >= 11) {
                numeroTelefone = numeroTelefone.substring(0, 10) + '-' + numeroTelefone.substring(10);
            }

            // Atualize o valor do campo de entrada
            input.value = numeroTelefone;
        }
    </script>
@endsection
