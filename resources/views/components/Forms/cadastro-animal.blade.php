    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <a href="{{ route('animais.index') }}">
                <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
            </a>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {!! session('success') !!}
                </div>
            @endif
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Animal</h6>
                <h1 class="display-5 text-uppercase mb-0">Cadastro do Animal</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form method="{{ $especieSelecionada ? 'POST' : 'GET' }}" action="{{ route('animais.store') }}">
                        @csrf
                        <div class="row g-3">
                            @if (!$especieSelecionada)
                                <div class="col-12">
                                    <select class="form-select bg-light border-0 px-4" name="especie" id="id_especie"
                                        style="height: 55px;" aria-label="Default select example">
                                        <option value="" disabled selected>Selecione uma espécie...</option>
                                        @foreach ($especies as $especie)
                                            <option value="{{ $especie->id_especie }}">{{ $especie->especie }}
                                                -------------
                                                {{ $especie->raca->count() }} Raças</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <div class="col-11">
                                    <select class="form-select bg-light border-0 px-4" name="id_especie" id="id_especie"
                                        style="height: 55px;" aria-label="Default select example">
                                        <option value="{{ $especieSelecionada }}">{{ $nomeEspecieSelecionada }}</option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <a href="{{ route('animais.create') }}">
                                        <i class="fa-solid fa-arrow-rotate-left fa-2x"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($especieSelecionada)
                                <div class="col-12">
                                    <select class="form-select bg-light border-0 px-4" name="id_raca" id="id_raca"
                                        style="height: 55px;" aria-label="Default select example">
                                        <option value="" disabled selected>Selecione uma raça...</option>
                                        @foreach ($racas as $raca)
                                            @if ($raca->id_especie == $especieSelecionada)
                                                <option value="{{ $raca->id_raca }}">{{ $raca->raca }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Nome"
                                        style="height: 55px;" name="nome" id="nome">
                                </div>
                                <div class="col-12">
                                    <input type="date" class="form-control bg-light border-0 px-4"
                                        placeholder="Ano do Nascimento" style="height: 55px;" maxlength="10"
                                        name="idade" id="idade">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0 px-4" name="id_tamanho" id="id_tamanho"
                                        style="height: 55px;" aria-label="Default select example">
                                        <option value="" disabled selected>Selecione um tamanho...</option>
                                        <option value="1">P</option>
                                        <option value="2">M</option>
                                        <option value="3">G</option>
                                    </select>
                                </div>

                                <div class="col-12">

                                    <select class="form-select bg-light border-0 px-4" name="id_sexo" id="id_sexo"
                                        style="height: 55px;" aria-label="Default select example">
                                        <option value="" disabled selected>Selecione o sexo...</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Cor"
                                        style="height: 55px;" id="cor" name="cor">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0 px-4"
                                        placeholder="Observações: (doenças, vacinas, deficiências...)"
                                        style="height: 55px;" id="observacoes" name="observacoes">
                                </div>
                            @endif
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" style="max-width: 200px;"
                                    type="submit">{{ $especieSelecionada ? 'Cadastrar' : 'Próximo' }}</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
