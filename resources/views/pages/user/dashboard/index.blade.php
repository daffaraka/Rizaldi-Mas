@extends('layouts.main')
@extends('partials.navbar')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    </head>
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
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Dashboards
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <section>
        <div class="container pt-5">

            <div class="container mt-5">
                <div class="col-12 col-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon purple mb-2">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Laporan anda</h6>
                                            @if ($total > 0)
                                                <h6 class="font-extrabold mb-0">{{ $total }}</h6>
                                            @else
                                                <h6 class="text-secondary mb-0">Kosong</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon red mb-2">
                                                <i class=""><i class="bi bi-patch-exclamation-fill"></i></i></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Pending</h6>
                                            @if ($pending > 0)
                                                <h6 class="font-extrabold mb-0">{{ $pending }}</h6>
                                            @else
                                                <h6 class="text-secondary mb-0">Kosong</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon green mb-2">
                                                <i> <i class="bi bi-check"></i></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Processing</h6>
                                            @if ($process > 0)
                                                <h6 class="font-extrabold mb-0">{{ $process }}</h6>
                                            @else
                                                <h6 class="text-secondary mb-0">Kosong</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon green mb-2">
                                                <i> <i class="bi bi-check-all"></i></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Complete</h6>
                                            @if ($completed > 0)
                                                <h6 class="font-extrabold mb-0">{{ $completed }}</h6>
                                            @else
                                                <h6 class="text-secondary mb-0">Kosong</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-3 p-3 bg-body rounded shadow-sm p-5">
                    <h6 class="border-bottom pb-2 mb-0">Semua Laporan</h6>
                    @if (count($pengaduan) > 0)
                        @foreach ($pengaduan as $aduan)
                            <div class="d-flex text-dark pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                    <div class="d-flex justify-content-between">
                                        <strong class="text-gray-dark">{{ $aduan->type }}</strong>
                                        <div>
                                            <a href="{{ route('detail', $aduan->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye-fill d-inline-block" tabindex="0"
                                                    data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                    data-bs-content="Disabled popover" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                </svg></a>

                                        </div>

                                    </div>
                                    <h6>#{{ $aduan->id }}</h6>
                                    <script>
                                        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
                                        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
                                    </script>
                                    @if ($aduan->status == 'Pending')
                                        <h1 class=" badge text-bg-danger fw-bold">{{ $aduan->status }}</h1>
                                    @elseif ($aduan->status == 'Processing')
                                        <h1 class="badge text-bg-warning">{{ $aduan->status }}</h1>
                                    @elseif ($aduan->status == 'Complete')
                                        <h1 class="badge text-bg-success">{{ $aduan->status }}</h1>
                                    @elseif ($aduan->status == 'Edit')
                                        <a href="{{route('edit',$aduan->id)}}" class="btn btn-sm btn-info fw-bold text-dark"> <i class="fa fa-pencil"
                                                aria-hidden="true"></i> Edit</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <small class="d-block text-end mt-3">
                            <a href="#">Total : {{ $total }}</a>
                        </small>
                    @else
                        <td colspan="8" class="text-center"> Tidak ada laporan satupun. <a
                                href="{{ route('laporans.index') }}">Lapor</a></td>
                    @endif
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
