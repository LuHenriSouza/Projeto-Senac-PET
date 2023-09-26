    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Transforme vidas</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Adote um amigo hoje !</h1>
                    <p class="fs-4 text-white mb-lg-4">Encontre amor incondicional e alegria em cada abraço peludo.<br>
                        Adote, não compre! Faça diferença na vida de um animal.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/J6MCq2IcKPQ" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
{{--
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/J6MCq2IcKPQ?si=9cB-WVJFyC-BPJ8H"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->
