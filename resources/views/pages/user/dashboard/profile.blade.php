
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
                            Profile
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
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil</strong> Profile berhasil di update.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <img class="sahpe" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                <img class="sahpe2" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                <div class="content">
                    <!-- Start Content Form -->
                    @foreach($user as $tampil)
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"></h5>
                                    <p class="card-text fw-bold">{{ $tampil->name }}</p>
                                    <p class="card-text text-muted">{{ $tampil->nik }}</p>
                                    <span  class="badge text-bg-primary">{{ $tampil->role }}</span>
                                    @if($tampil->level >= 2 && $tampil->level < 5)
                                    <div class="silver">
                                        <span class="badge rounded-pill text-bg-secondary">
                                            Silver
                                        </span><br>
                                    </div>
                                @elseif ($tampil->level > 5 && $tampil->level < 10)
                                    <div class="gold">
                                        <span class="badge rounded-pill text-bg-warning text-light">Gold</span>
                                    </div>
                                @elseif ($tampil->level > 10)
                                    <div class="diamond">
                                        <span class="badge text-bg-info mt-3 p-3">
                                            Diamond
                                        </span>
                                    </div>
                                @elseif($tampil->level <= 2)
                                    <div class="bronze">
                                        <span class="badge rounded-pill text-bg-light">Bronze</span>
                                    </div>
                                @endif
                                </div>
                            </div>
                                <style>
                                    .diamond span{
                                        color:rgb(207, 204, 204) !important;
                                        background-color: rgb(162, 0, 187) !important;
                                    }
                                    .silver span{
                                        color:rgb(255, 255, 255) !important;
                                        background-color: rgb(136, 136, 136) !important;
                                    }
                                    .bronze span{
                                        color:rgb(255, 255, 255) !important;
                                        background-color: rgb(100, 44, 44) !important;
                                    }
                                </style>
                            <div class="col-12">

                                <p class=" text-muted"> <span class="text-danger">*</span> Lapor untuk meningkatkan level anda!</p>
                                <span class="badge rounded-pill text-bg-info text-light">level sekarang : {{ $tampil->level }}</span><br>
                                <span class="badge rounded-pill text-bg-light">Persentase untuk naik level :
                                    <span>
                                        @if($tampil->persentase > 0)
                                            {{ $tampil->persentase }}
                                        @endif
                                    %</span>
                                </span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="warning striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tampil->persentase }}%"></div>
                                </div>
                                <div class="mt-3 bronze">
                                    Level < 2 :  <span class="badge rounded-pill text-bg-secondary">Bronze</span>
                                </div>
                                <div class="mt-3 silver">
                                    Level > 2 :  <span class="badge rounded-pill text-bg-secondary">Silver</span>
                                </div>
                                <div class="mt-3 gold">
                                    Level > 5 :  <span class="badge rounded-pill text-bg-warning text-light">Gold</span>
                                </div>
                                <div class="mt-3 diamond">
                                    Level > 10 :  <span class="badge rounded-pill text-bg-warning text-light">Diamond</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <table class="table table-sm">
                                    <p class="text-muted">hanya yang terdapat bintang yang bisa diubah (<span class="text-danger">*</span>)</p>
                                    <form action="{{ route('profile') }}" method="post">
                                        @csrf
                                        <tr>
                                            <td class="fw-bold mb-3 d-block">Name<span class="text-danger">*</span> :
                                                <input type="text" class="form-control" value="{{ $tampil->name }}" name="name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold mb-3">Email<span class="text-danger">*</span> :
                                                <input type="text" class="form-control" value="{{ $tampil->email }}" name="email">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold mb-3">Address :
                                                <input type="text" class="form-control" value="{{ $tampil->address }}" name="address" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold mb-5">Password<span class="text-danger">*</span> :
                                                <input type="password" class="form-control" value="{{ $tampil->password }}" name="password">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="fw-bold mb-5">Phone :
                                                <input type="text" class="form-control" value="{{ $tampil->phone }}" name="phone" readonly>
                                            </td>
                                        </tr>
                                        <tr class="mt-3">
                                            <td>
                                                <button type="submit" class="btn btn-primary mt-3">Ubah</button>
                                            </td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                        <!-- End Content Form -->
                        @endforeach
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
