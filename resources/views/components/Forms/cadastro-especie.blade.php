    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <a href="{{ route('especies.index') }}">
                <i class="fa-solid fa-circle-arrow-left fa-2x m-2 mb-4"></i>
            </a>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {!! session('success') !!}
                </div>
            @endif
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Espécie</h6>
                <h1 class="display-5 text-uppercase mb-0">Cadastre a Espécie</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form method="POST" action="{{ route('especies.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4"
                                    placeholder="Nome da espécie" style="height: 55px;" name="especie" id="especie">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Nome"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" style="max-width: 200px;"
                                    type="submit">Próximo</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- test --}}
    <!-- Contact End -->
