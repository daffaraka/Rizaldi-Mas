
@extends('layouts.main')

@extends('partials.navbar')
@section('content')
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <a class="navbar-brand" href="{{ url('/') }}">
                        </a>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Tempatnya Untuk Melakukan Pengaduan Laporan Di Kelurahan Setempat.
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Silamas adalah aplikasi pengaduan masyarakat yang menampung aspirasi masyarakat secara online,
                            yang dapat memudahkan masyarakat untuk menyampaikan pengaduannya.</p>
                        <div class="button">
                            <a href="{{ route('laporans.index') }}" class="btn text-danger">Laporkan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!-- Start Info Search -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="../assets/img/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/img/shapes/shape.png" alt="#">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="content">
                            {{-- @if (session('alert'))
                                <a href="{{ route('verifikasi.index') }}" class="nav-link badge text-bg-danger mx-5">{{ session('alert') }} klik disini</a>
                            @endif --}}
                            <h2><span>Cari Laporan?</span>Cari Laporan Disini</h2>
                            <!-- Start Search Form -->
                            <form action="{{ route('search') }}" method="GET">
                                <div class="search-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="search-input">
                                                <input type="text" name="id" id="id"
                                                    placeholder="Cari Laporan (Masukkan ID anda)">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-3 col-md-3 col-12">
                                            <div class="search-input">
                                                <label for="id"><i class="lni lni-chevron-down"></i></label>
                                                <select name="id" id="id">
                                                    <option value="none" selected>Lainnya</option>
                                                    <option value="none">Pengaduan</option>
                                                    <option value="none">Aspirasi</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="search-btn button">
                                                <button type="submit" class="btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Search Form --><hr class="mt-3 mb-3">
                            <h2 class="text-warning mt-5 mb-5"><span class="mt-10 text-danger">How to use?</span class="">Bagaimana Cara Melapor?</h2>
                            <img src="../assets/img/hero/howto.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info Search -->

    @if(Session::has('success'))
        <div class='container-fluid d-flex justify-content-end' style='position:fixed;top:100px;right:0;'>
            <div class='toast mb-3 show' role='alert' aria-live='assertive' aria-atomic='true'>
            <div class='toast-header'>

                <svg class='placeholder col-1 rounded me-2 bg-warning' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#7CFC00'></rect>
                </svg>

                <strong class='me-auto'>Alert !</strong>
                <small>Just now</small>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
            </div>
            <div class='toast-body bg-light text-success'>
                {{ Session::get('success') }}
            </div>
            </div>
        </div>
    @endif
    {{-- Footer --}}
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-5">
          <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted mx-auto">&copy; 2023 KELOMPOK RPL SILAMAS</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-auto">
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook" width="24" height="24"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram" width="24" height="24"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-google" width="24" height="24"></i></a></li>
          </ul>
        </footer>
    {{-- End Footer --}}

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>
@endsection
