
@extends('layouts.main')
@extends('partials.navbar')
@section('content')
<head>
    <title>SILAMAS | {{ $title }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/SILAMAS.png') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
</head>
<style>
    .domain-search .inner-cotainer {
  background-color: #fff;
  border-radius: 10px;
  border: 1px solid #eee;

  text-align: left !important;
  position: relative;
  margin-top: -280px !important;
  z-index: 5;
  -webkit-box-shadow: 0px 10px 30px #0000000f;
          box-shadow: 0px 10px 30px #0000000f;
  overflow: hidden;
}

.hero-area .hero-content {
  border-radius: 0;
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 0px 150px;
  margin-top: -80px !important;
}
</style>
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Seach Results
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start  Profile -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="../assets/img/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/img/shapes/shape.png" alt="#">
                <div class="content">
                    @if (count($results) > 0)
                    <!-- Start Content Form -->
                    @foreach ($results as $result)
                    <div class="hero-content">
                        <p class="wow fadeInRight d-flex text-center" data-wow-delay=".1s">
                            #ID LAPORAN  {{ $result->id }} <span class="ms-auto badge text-bg-danger">{{ $result->secret }} Anonim</span>
                        </p>
                    </div>
                    <div class="row wow fadeInDown" data-wow-delay=".6s">
                        <div class="col-sm-4">
                            <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title"><img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ Auth::user()->name }}" class="img-radius rounded-circle" width="100" height="100" alt="User-Profile-Image"></h5>
                                @if($result->secret == "Tidak")
                                 <p class="card-text fw-bold">{{ $result->name }}</p>
                                 <p class="card-text text-muted">{{ $result->nik }}</p>
                                 <span  class="badge text-bg-primary">{{ $result->role }}</span>
                                @else
                                <div class="text-danger">User ini Anonim</div>
                                @endif

                            </div>
                            </div>
                            <div class="card text-center mt-3">
                            <div class="card-body">
                                <label for="" class="fw-bold">Lokasi</label>
                                <h5 class="card-title"><img src="../assets/images/upload/{{ $result->image }}" class="img-radius rounded" alt="User-Profile-Image"></h5>

                            </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card">
                            <div class="card-body">
                                <table class="table table-sm">
                                    <form action="/profile" method="post">
                                        @csrf
                                        <tr>
                                            <td>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label fw-bold">Tanggal Pelaporan </label>
                                                    <div class="col-sm-8">
                                                        <span class="badge text-bg-warning">{{ $result->created_at }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label fw-bold">Name </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $result->name }}">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label fw-bold">Jenis Pelaporan </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $result->type }}">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label fw-bold">Description</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $result->description }}">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label fw-bold">Status</label>
                                                    <div class="col-sm-8">
                                                        <div class="badge text-bg-danger">{{ $result->status }}</div>

                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-3 row">
                                                    <label for="staticEmail" class="col-sm-4 col-form-label fw-bold">Lokasi Kejadian</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $result->lokasi }}">
                                                    </div>
                                                    @endforeach
                                                    <tr>
                                                        <td>
                                                            @else
                                                            <div class="d-flex justify-content-center">
                                                                <p class="text-center text-danger">No results found.</p>
                                                                <a href="/" class="btn btn-primary">Cari yang lain</a>
                                                            </div>

                                                            @endif
                                                        </td>
                                                    </tr>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                        <!-- End Content Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End  Profile -->


    {{-- Footer --}}
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-5">
          <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted mx-auto">&copy; 2022 KELOMPOK 6 WAD | By : Bayu Satrio Trilaksono</span>
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
