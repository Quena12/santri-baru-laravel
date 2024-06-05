@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            {{-- Navigasi --}}
            <div class="d-flex">
                <a href="{{ route('blog') }}">Blog</a>
                <div class="mx-2"> . </div>
                <a href="">Buat Atikel</a>
            </div>
            <h4>Halaman Blog Artikel</h4>
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="from-group mb-4">
                    <table for="">Masukan Judul Kegiatan</table>
                    <input type="text" class="from-control @error('judul')is-invalid @enderror" name="judul"
                        value="{{ old('judul') }}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="from-group mb-4">
                    <table for="">pilih Photo Kegiatan</table>
                    <input type="file" class="from-control @error('image')is-invalid @enderror" name="image">

                    @error('image')
                        <div class="invalid-feedback">
                            {{ $messange }}
                        </div>
                    @enderror
                </div>

        <div class="from-group mb-4">
            <label for="">Artikel Berita</label>
            <textarea name="desc" id="summernote">
                    {{ old('desc') }}
                </textarea>

            @error('desc')
                <div class="text-danger">
                    {{ $messange }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        </div>
    </section>
@endsection
