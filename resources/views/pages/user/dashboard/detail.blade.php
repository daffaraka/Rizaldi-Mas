@extends('layouts.main')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/SILAMAS.png') }}" />
@include('partials.navbar')
@section('content')

    <style>
        .domain-search .inner-cotainer {
            background-color: rgb(255, 255, 255) !important;
            border-radius: 10px;
            border: 1px solid #eee;
            padding: 0px 0px !important;
            position: relative;
            text-align: unset !important;
            margin-top: -120px;
            z-index: 5;
            -webkit-box-shadow: 0px 10px 30px #0000000f;
            box-shadow: 0px 10px 30px #0000000f;
            overflow: hidden;

        }

        .hero-area {
            position: relative;
            background-color: #303136;
            padding: 280px 0 260px 0;
            z-index: 0;
            background-color: #1d1d1e !important;
            background-image: url("../img/hero/bg-host-3.png") !important;
            background-size: cover;
            background-position: center;
        }

        .card-1 {

            border: none !important;
            border-radius: 10px !important;
            width: 100% !important;
            background-color: #fff !important;
        }
    </style>
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Detail
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <section>
        <div class="container mt-5">
            @foreach ($item->details as $aduan)
                <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
                    <img class="me-3" src="{{ asset('assets/img/logo/SILAMAS.png') }}" alt="" width="48"
                        height="38">
                    <div class="lh-1">
                        <h1 class="h6 mb-0 text-dark lh-1">Detail Laporan
                            @if ($aduan->status == 'Pending')
                                <span class=" badge text-bg-danger fw-bold">{{ $aduan->status }}</span>
                            @elseif ($aduan->status == 'Processing')
                                <span class="badge text-bg-warning">{{ $aduan->status }}</span>
                            @elseif ($aduan->status == 'Complete')
                                <span class="badge text-bg-success">{{ $aduan->status }}</span>
                            @endif
                        </h1>
                        <div class="" style="position: absolute !important; right:150px !important;">

                            <h1 class="h6 mb-0 text-dark lh-1 ">Tanggal dibuat : <span
                                    class="badge text-bg-info rounded-pill">{{ $aduan->created_at }}</span></h1>
                        </div>
                        <small class="text-muted text-danger fw-bold">#{{ $aduan->id }}</small>
                    </div>
                </div>

                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">Information</h6>
                    <div class="d-flex text-muted pt-3">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%"
                                fill="#007bff" dy=".3em">32x32</text>
                        </svg>
                        <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <strong class="d-block text-gray-dark">USER</strong>
                            NIK : {{ $aduan->user_nik }}<br>
                            NAMA :{{ $aduan->name }}<br>
                            ID USER :{{ $aduan->user_id }}<br>
                        </p>
                    </div>
                    <div class="d-flex text-muted pt-3">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%"
                                fill="#e83e8c" dy=".3em">32x32</text>
                        </svg>
                        <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <strong class="d-block text-gray-dark">Description</strong>
                            <span class="btn btn-outline-primary"
                                style="position: absolute !important; right:680px !important;" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Lihat Lampiran <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-eye-fill d-inline-block"
                                    tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Disabled popover" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></span><br>
                            {{ $aduan->description }}
                        </p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lampiran</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @php
                                        $data = 'assets/images/upload/' . $aduan->image;
                                    @endphp
                                    @if ($aduan->image == true)
                                        <div class="img-hov">
                                            <img src="{{ asset($data) }}" width="30%" alt="">
                                        </div>
                                    @else
                                        <p class="text-danger bg-outline-danger">Tidak ada lampiran...</p>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Akhir Modal --}}
                    <div class="d-flex text-muted pt-3">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%"
                                y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                        </svg>
                        <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <strong class="d-block text-gray-dark">Lokasi</strong>
                            {{ $aduan->lokasi }}
                        </p>
                    </div>
                    <div class="px-4 py-3 mb-2 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">
                        <div class="text-center flex-1">
                            <h3 class="mb-8 font-semibold">Tanggapan</h3>
                            <p class="text-gray-800 dark:text-gray-400">

                                @if (empty($tangap->tanggapan))
                                    Belum ada tanggapan
                                @else
                                    {{ $tangap->tanggapan }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <center>

                        <div class="p-3 mb-4 bg-light rounded-3 mt-3 shadow">
                            <div class="container py-2">
                                @if ($aduan->status == 'Complete')
                                    <div class="alert alert-info" role="alert">
                                        Puas dengan layanan kami?
                                    </div>
                                    @if ($tangap->feedback_user)
                                        <p>Feedback saya: {{ $tangap->feedback_user }}</p>
                                    @else
                                        <form action="{{ route('feedback.complete') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="pengaduan_id" value="{{ $aduan->id }}">
                                            <input type="hidden" name="id" value="{{ $tangap->id }}">
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" value="Sangat Puas"
                                                    name="feedback" id="btnradio1" checked>
                                                <label class="btn btn-outline-primary" for="btnradio1">Sangat Puas</label>

                                                <input type="radio" class="btn-check" value="Puas" name="feedback"
                                                    id="btnradio2">
                                                <label class="btn btn-outline-primary" for="btnradio2">Puas</label>

                                                <input type="radio" class="btn-check" value="Tidak Puas"
                                                    name="feedback" id="btnradio3">
                                                <label class="btn btn-outline-primary" for="btnradio3">Tidak Puas</label>
                                            </div><br>
                                            <button type="submit" class="btn btn-primary mt-5">Kirim</button>
                                        </form>
                                    @endif
                                @endif
                            </div>
            @endforeach
        </div>
        </center>
        </div>

        </div>
    </section>
    {{-- Footer --}}
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-5">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted mx-auto">&copy; 2023 KELOMPOK RPL SILAMAS</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-auto">
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook" width="24"
                        height="24"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram" width="24"
                        height="24"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-google" width="24"
                        height="24"></i></a></li>
        </ul>
    </footer>
    {{-- End Footer --}}

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>
