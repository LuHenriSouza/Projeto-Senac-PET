    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Animal</h6>
                <h1 class="display-5 text-uppercase mb-0">Cadastro do Animal</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-12">

                                <select class="form-select bg-light border-0 px-4" name="especie" id="id_especie"
                                    style="height: 55px;" aria-label="Default select example">
                                    <option value="" disabled selected>Selecione uma espécie...</option>
                                    @foreach($especies as $especie)
                                        <option value="{{ $especie->id }}">{{ $especie->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">

                                <select class="form-select bg-light border-0 px-4" name="raca" id="raca"
                                    style="height: 55px;" aria-label="Default select example">
                                    <option value="" disabled selected>Selecione uma raça...</option>
                                    @foreach($racas as $raca)
                                        <option value="{{ $raca->id }}">{{ $raca->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Nome"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Nascimento"
                                    style="height: 55px;">
                            </div>
                            <div class="mb-3">

                                <select class="form-select bg-light border-0 px-4" name="tamanho" id="tamanho"
                                    style="height: 55px;" aria-label="Default select example">
                                    <option value="" disabled selected>Selecione um tamanho...</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                </select>
                            </div>

                            <div class="mb-3">

                                <select class="form-select bg-light border-0 px-4" name="sexo" id="id_sexo"
                                    style="height: 55px;" aria-label="Default select example">
                                    <option value="" disabled selected>Selecione o sexo...</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>

                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Cor"
                                    style="height: 55px;">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Observações: (doenças, vacinas, deficiências...)"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" style="max-width: 200px;" type="submit">Próximo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
