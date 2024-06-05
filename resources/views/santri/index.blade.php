@extends('layouts.layouts')

@section('content')
    <div class="container">
        <h1>Daftar Santri</h1>
        <div class="row">
            @foreach ($santris as $santri)
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <img src="{{ asset($santri->photo_path ? 'storage/' . $santri->photo_path : 'asset/image/default-photo.png') }}"
                            class="card-img-top" alt="Santri Photo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $santri->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="container">

                <!-- Pemanggilan gambar daftar informasi santri baru -->
                <img src="{{ asset('asset/image/pondok.asri.png') }}" alt="Santri Baru" class="img-fluid mb-4">

                <!-- Judul dan Teks -->
                <h1 class="font-weight-bold mb-2">Gabung bersama kami dengan mewujudkan generasi santri kreatif</h1>
                <p class="font-weight-bold mb-3" style="font-size: 1.5em;">
                    Yuk Daftar Sekarang!!!
                </p>

                <!-- Link Google Form -->
                <a href="https://forms.gle/LzCefYCSEYxURFQ9A" target="_blank" class="btn btn-primary">Daftar Santri Baru</a>

            </div>

            <style>
                /* CSS tambahan sesuai kebutuhan */
                .img-fluid {
                    max-width: 100%;
                    height: auto;
                }

                /* Gaya CSS lainnya */
            </style>
        @endsection
