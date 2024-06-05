<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('asset/image/ic-logo') }}">

    {{-- Meta untuk tampil di Whatsapp --}}
    @if (Request::segment(1) == '')
        <meta property="og:title" content="Pondok Pesantren Asri Bil Qolam" />
        <meta name="description" content="Pesantren Moderan dengan Fasilitas Lengkap" />
        <meta property="og:url" content="http://pondokpesantrenasribilqolam.com" />
        <meta property="og:description" content="Pondok Pesantren Asri Bil Qolam" />
        <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
        <meta property="og:type" content="article" />
        <title>Santri Baru</title>
    @elseif (Request::segment(1) == 'detail')
        <meta property="og:title" content="{{ $artikel->judul }}" />
        <meta name="description" content="{{ $artikel->judul }}" />
        <meta property="og:url" content="http://pondokpesantrenasribilqolam.com/detail/{{ $artikel->slug }}" />
        <meta property="og:description" content="{{ $artikel->judul }}" />
        @if ($artikel->image)
            <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
        @else
            <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
        @endif
        <meta property="og:type" content="article" />

        <title>Santri Baru | {{ $artikel->title }}</title>
    @endif

    {{-- Meta untuk tampil di Whatsapp --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('asset/css/magnific.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    {{-- Summernote CSS di antara Head --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />


</head>

<body>


    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('content')


    {{-- Footer --}}
    <section id="footer">
        <div class="container py-4">
            <footer>
                <div class="row">
                    {{-- Kolom 2 Navigasi --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-blod mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita
                                        Pesantren</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan
                                        Pesantren</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Galery
                                        Pesantren</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Info PSB</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Info
                                        Prestasi</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Video
                                        Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Kolom 2 Media Sosial --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-blod mb-3">Follow Kami</h5>
                        <div class="d-flex mb-3">
                            <a href="" target="_blank" class="text decoration-none text-dark">
                                <img src="{{ asset('asset/icons/ig.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text decoration-none text-dark">
                                <img src="{{ asset('asset/icons/facebook.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text decoration-none text-dark">
                                <img src="{{ asset('asset/icons/tiktok.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text decoration-none text-dark">
                                <img src="{{ asset('asset/icons/youtube.svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                        </div>
                    </div>
                    {{-- Kolom 3 Kontak --}}
                    <div class="col-12 col-md-3 mb-5">
                        <h5 class="font-inter fw-blod mb-3"> Kontak Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">info@bilqolam.sch.id</a></li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">082355667778</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">082355667778</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">082355667778</a>
                            </li>
                        </ul>
                    </div>
                    {{-- Kolom 4 Alamat --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-blod mb-3">Alamat Pondok</h5>
                        <p> Jalan Banguntapan Wonocatur Blok O</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    </div>
    </div>
    </section>

    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    Pesantren Asri Bil Qolam
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p>
                        <a href="/kebijakan" class="text-decoration-none text-drak">Kebijakan Privacy</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Join --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- jQuery 1.7.2+ or Zepto.js 1.0+ --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('asset/js/magnific.js') }}"></script>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>


    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>



    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };

        //Animasi Aos//
        AOS.init();

        // Magnific
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script>

</body>

</html>
