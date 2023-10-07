    <!-- Contact Start -->
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container-fluid pt-5">
        <form method="POST">
        <div class="container">


            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Raças</h6>
                <h1 class="display-5 text-uppercase mb-0">Cadastre uma Raça</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">

                    <div class="col-12">

                        <select class="form-select bg-light border-0 px-4" name="especie" id="id_especie"
                            style="height: 55px;" aria-label="Default select example">
                            <option value="" disabled selected>Selecione uma espécie...</option>
                            @foreach($especies as $especie)
                                <option value="{{ $especie->id_especie }}">{{ $especie->especie }}</option>
                            @endforeach
                        </select>
                    </div>


                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4"
                                    placeholder="Cadastre uma Raça" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" style="max-width: 200px;"
                                    type="submit">Cadastrar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- test --}}
    <!-- Contact End -->
