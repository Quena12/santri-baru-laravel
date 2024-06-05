@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="Close"></button>
                </div>
            @endif
            <h4>Halaman Photo Kegiatan</h4>
            <a href="" class="btn btn-primary">Upload Photo</a>


            <div class="table-reponsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
