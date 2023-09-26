    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Entre em Contato</h5>
                    <p class="mb-4">A "Patinhas Felizes" é uma ONG que se dedica à adoção de animais. Sua missão é
                        oferecer um lar permanente e amoroso para animais abandonados
                        e maltratados, esforçando-se para criar um ambiente seguro e acolhedor para esses animais
                        indefesos.</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Rua pet-ista,13 - Vila Lula</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>patinhafeliz@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+13 13 91313-1313</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Atalhos</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Sobre nós</a>
                        <a class="text-body mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Conheça o time</a>
                        <a class="text-body mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Minha Conta</a>
                        <a class="text-body" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Contato</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">
                    @guest
                        <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Cadastre-se</h5>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" placeholder="Seu Email">
                                <button class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    @endguest
                    @auth
                        <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Siga-nos</h5>
                    @endauth
                    @guest
                        <h6 class="text-uppercase mt-4 mb-3">Siga-nos</h6>
                    @endguest
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i
                                class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i
                                class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i
                                class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>



                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Termos e Condições</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Política de Privacidade</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">SAC</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Ajuda</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Perguntas Frequentes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">Patinha Feliz</a>. Todos os Direitos
                        Reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Desenvolvido por<a class="text-white" href="https://www.sp.senac.br/"
                            target="_blank"> Senac</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
