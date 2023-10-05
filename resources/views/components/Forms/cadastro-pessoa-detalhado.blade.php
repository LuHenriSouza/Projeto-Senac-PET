    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Casa</h6>
                <h1 class="display-5 text-uppercase mb-0">Informações Importantes</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="row g-3">
                        {{-- <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Endereço"
                                    style="height: 55px;">
                            </div> --}}
                        <div class="col-12">
                            <Label class="fs-5 text-dark mb-2" for="historico">já teve algum animal
                                anteriormente?</Label>
                            <div class="d-flex">
                                <span class="me-2">Não</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="historico"
                                        name="historico">
                                    <label class="form-check-label" for="historico">Sim</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="guarda" class="fs-5 text-dark mb-2">O animal servirá de guarda para a
                                residencia?</label>
                            <div class="d-flex">
                                <span class="me-2">Não</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="guarda"
                                        name="guarda">
                                    <label class="form-check-label" for="guarda">Sim</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="fs-5 text-dark mb-2" for="historico">quantas pessoas moram na sua casa?</p>
                            <div class="d-flex">
                                <select class="form-select border-0 px-4" name="qnt" id="qnt"
                                    style="height: 55px;" aria-label="Default select example">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    <option value="6">6 ou mais</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="motivo" class="fs-5 text-dark mb-2">Em poucas palavras diga o por quê de
                                querer adotar um animal</label>
                            <input name="motivo" id="motivo" type="text" class="form-control border-0 px-4"
                                placeholder="Escreva..." style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <label for="obs" class="fs-5 text-dark mb-2">Observações</label>
                            <textarea name="obs" id="obs" class="form-control border-0 px-4 py-3" rows="4" placeholder="Opcional*"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" style="max-width: 200px;"
                                type="submit">Concluir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
