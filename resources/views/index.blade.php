@extends('layouts.layouts')

@section('content')
    <section id="santri" class="px-0">
        <div class="container text-center">
            <div class="santri-title">
                <div class="santri-text">Selamat Datang <br> Di Pondok Pesantren Asri Bil Qolam</div>
            </div>
    </section>

    <section id="program" style="margin-top: -30px">
        <div class="container col-xxl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="zoom-in-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Pendidikan <br> Berkualitas</h4>
                        </div>
                        <img src="{{ asset('asset/image/ic-book.png') }}" height="66" width="66" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="zoom-in-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Pendidikan <br> Berahlak</h4>
                        </div>
                        <img src="{{ asset('asset/image/ic-globe.png') }}" height="66" width="66" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="zoom-in-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Pendidikan <br> Muammalah</h4>
                        </div>
                        <img src="{{ asset('asset/image/ic-neraca.png') }}" height="66" width="66" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="zoom-in-down">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Pendidikan <br> Berteknologi</h4>
                        </div>
                        <img src="{{ asset('asset/image/ic-komputer.png') }}" height="66" width="66" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container">
            <div class="header-berita text-center" data-aos="zoom-in-down"">
                <h2 class="fw-blod">Berita Kegiatan Pondok Pesantren</h2>
            </div>

            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="fluid" alt="">
                        <div class="content berita">
                            <p class="mb-3 text-secondary">{{$item->create_at}}</p>
                            <h4 class="fw-blod mb-3">{{$item->judul}}</h4>
                            <p class="text-secondary">#pesantrenkreatif</p>
                            <a href="/detail/{{$item->slug}}" 
                                class="text-decoration-none text-danger"> Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- Berita --}}

    {{-- join --}}
    <section id="join" class="py-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-lg-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Daftar Santri</h5>
                    </div>
                    <h1 class="fw-blod mb-2">Gabung bersama kami dengan mewujudkan generasi santri kreatif</h1>
                    <p class="mb-3">
                        Pesantren Asri Bil Qolam merupakan pesantren terbaik di Yogyakarta
                    </p>
                    <a href="/santri" class="btn btn-outline-danger">Daftar Santri</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('asset/image/il-photo-01.png') }}" alt="">
                </div>
                {{-- video --}}
                <section id="video" class="py-5">
                    <div class="container py-5">
                        <div class="text-center" data-aos="zoom-out">>
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/ZTcy-unR4SU?si=3lyFyolpkcw4qJx4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </section>
                {{-- video --}}

                <section class="video_youtube" class="py-5">
                    <div class="container py-5">
                        <div class="header-berita text-center" data-aos="zoom-out">
                            <h2 class="fw-blod">Video Kegiatan Pondok Pesantren</h2>
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-4" data-aos="zoom-out">
                                <iframe width="100%" height="215"
                                    src="https://www.youtube.com/embed/ZTcy-unR4SU?si=3lyFyolpkcw4qJx4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4" data-aos="zoom-out">
                                <iframe width="100%" height="215"
                                    src="https://www.youtube.com/embed/ZTcy-unR4SU?si=3lyFyolpkcw4qJx4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-4" data-aos="zoom-out">
                                <iframe width="100%" height="215"
                                    src="https://www.youtube.com/embed/ZTcy-unR4SU?si=3lyFyolpkcw4qJx4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="footer-berita text-center" data-aos="zoom-in-down">
                            <a href="" class="btn btn-outline-danger">Video Lainnya</a>
                        </div>
                    </div>
                </section>
                    {{-- Foto --}}
                <section id="foto" class="section-foto parallax">
                    <div class="container">

                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div class="d-flex align-items-center" data-aos="zoom-in-down">
                                <div class="stripe-putih me-2"></div>
                                <h5 class="fw-blod text-white">Foto Kegiatan</h5>
                            </div>
                            <div>
                                <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-down">
                                <a class="image-link" href="{{asset('asset/image/il-photo-01.png') }}">
                                <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-down">
                                <a class="image-link" href="{{asset('asset/image/il-photo-01.png') }}">
                                <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-down">
                                <a class="image-link" href="{{asset('asset/image/il-photo-01.png') }}">
                                <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6"data-aos="zoom-in-down">
                                <a class="image-link" href="{{asset('asset/image/il-photo-01.png') }}">
                                <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            @endsection
