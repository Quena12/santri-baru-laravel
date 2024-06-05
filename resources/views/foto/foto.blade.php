@extends('layouts.layouts')

@section('content')
    {{-- Foto --}}
    <section id="foto" style="margin-top: 100px" class="section-foto parallax">
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
                    <a class="image-link" href="{{ asset('asset/image/il-photo-01.png') }}">
                        <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-down">
                    <a class="image-link" href="{{ asset('asset/image/il-photo-01.png') }}">
                        <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6" data-aos="zoom-in-down">
                    <a class="image-link" href="{{ asset('asset/image/il-photo-01.png') }}">
                        <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-6"data-aos="zoom-in-down">
                    <a class="image-link" href="{{ asset('asset/image/il-photo-01.png') }}">
                        <img src="{{ asset('asset/image/il-photo-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
