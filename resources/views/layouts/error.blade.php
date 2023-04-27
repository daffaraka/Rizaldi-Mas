
@extends('layouts.main')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/SILAMAS.png') }}"/>
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
.card-1{

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
                            Error
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Show -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                <img class="sahpe2" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                    <div class="px-5 p-5 ms-auto">
                        <a href="/"><button class="btn btn-primary mb-3">Back</button></a>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error Found</strong> Tidak ada halaman yang dimaksud.
                            <button type="button" class="btn-close"></button>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Show  -->
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
