    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow' }}">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('asset/image/pondok-01.png') }}" height="66" width="66" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#kontakkami">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="submit btn btn-primary">Logout</button>
                        </form>
                    @else 
                        <a href="/login" class="btn btn-danger">Sign In</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
