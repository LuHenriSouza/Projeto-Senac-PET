    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Onde estamos</h6>
                        <span>Rua Pet-ista nº13 - Vila Lula</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email</h6>
                        <span>patinhafeliz13@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Telefone</h6>
                        <span>+13 13 91313-1313</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
        <a href="{{ route('dashboard') }}" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Patinha Feliz</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('dashboard') }}" class="nav-item nav-link">Home</a>
                <a href="#sobrenos" class="nav-item nav-link">Sobre nós</a>
                @guest
                    <a href="{{ route('register') }}"
                        class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Criar Conta <i
                            class="bi bi-arrow-right"></i></a>
                @endguest
                @auth
                <a href="{{ route('register') }}"
                class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Adotar <i
                    class="bi bi-arrow-right"></i></a>
                @endauth
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
