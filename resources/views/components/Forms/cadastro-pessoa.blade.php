    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pessoa</h6>
                <h1 class="display-5 text-uppercase mb-0">Complementar Cadastro</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 parte1 bg-light" placeholder="CEP"
                                    style="height: 55px;" name="cep" id="cep" maxlength="8">
                                    <span class="erro" id="erro-cep"></span>
                            </div>
                            <div class="col-12 d-none" id="custom-loader-cep">
                                <div class="custom-loader"></div>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 parte1" placeholder="Endereço"
                                    style="height: 55px;" name="rua" id="rua" readonly>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 parte1" placeholder="Bairro"
                                    style="height: 55px;" name="bairro" id="bairro" readonly>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 parte1" placeholder="Cidade"
                                    style="height: 55px;" name="cidade" id="cidade" readonly>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 parte1" placeholder="Estado"
                                    style="height: 55px;" name="uf" id="uf" readonly>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 parte1 bg-light" placeholder="Nº"
                                    style="height: 55px;" name="numero" id="numero">
                                    <span class="erro" id="erro-num"></span>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Complemento"
                                    style="height: 55px;" name="complemento" id="complemento">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 px-4 bg-light parte1" placeholder="Telefone"
                                    style="height: 55px;" name="telefone" id="campo-5"
                                    oninput="formatarTelefone(this)" maxlength="15">
                                <span class="erro" id="erro-tel"></span>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" style="max-width: 200px;" type="button"
                                    id="botaoProximo" data-target="#elemento-alvo">Próximo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- test --}}
    <!-- Contact End -->
