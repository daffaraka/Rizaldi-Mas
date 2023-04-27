@extends('layouts.main')
@extends('partials.navbar')
@section('content')

    <head>
        <link rel="shortcut icon" type="image/x-icon" href="../assets/images/logo/SILAMAS.png" />
    </head>
    <style>
        .domain-search .inner-cotainer {
            background-color: #fff;
            border-radius: 10px;
            border: 1px solid #eee;
            padding: 75px 80px;
            text-align: left !important;
            position: relative;
            margin-top: -220px !important;
            z-index: 5;
            -webkit-box-shadow: 0px 10px 30px #0000000f;
            box-shadow: 0px 10px 30px #0000000f;
            overflow: hidden;
        }
    </style>

    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            EDIT LAPORAN PENGADUAN ANDA
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <div class="container mt-5 py-3">
        <h1>Edit Laporan</h1>

        <form action="{{ route('update-laporan', $laporan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group my-3">
                <label for="judul">Type Laporan</label>
                <div class="btn-group d-flex mt-3" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" value="Pengaduan" name="type" id="btnradio1" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Pengaduan</label>

                    <input type="radio" class="btn-check" value="Aspirasi" name="type" id="btnradio2">
                    <label class="btn btn-outline-primary" for="btnradio2">Aspirasi</label>

                    <input type="radio" class="btn-check" value="Lainnya" name="type" id="btnradio3">
                    <label class="btn btn-outline-primary" for="btnradio3">Lainnya</label>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ $laporan->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="type">Type</label>
                    <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"
                        value="{{ old('type', $laporan->type) }}">
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                        value="{{ $laporan->tanggal_kejadian }}">
                    @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror"
                        value="{{ old('lokasi', $laporan->lokasi) }}">
                    @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" accept="image/*"
                        class="form-control @error('gambar') is-invalid @enderror">
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group my-3">
                    <label for="secret">Secret</label>
                    <div class="btn-group d-flex mt-3" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" value="Ya" name="secret" id="ya" checked>
                        <label class="btn btn-outline-primary" for="ya">Ya</label>

                        <input type="radio" class="btn-check" value="Tidak" name="secret" id="tidak">
                        <label class="btn btn-outline-danger" for="tidak">Tidak</label>
                    </div>
                    @error('secret')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @error('secret')
                            <div class="form-group my-3">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ old('status', $laporan->status) }}">
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        @enderror
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
@endsection
