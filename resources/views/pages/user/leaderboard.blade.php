
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
                            Leaderboard
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

                <img class="sahpe" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                <img class="sahpe2" src="{{  asset('assets/img/shapes/shape.png') }}" alt="#">
                <div class="content">
                    <!-- Start Content Form -->
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($levels as $key => $user)
                            <tr style="background-color:
                                @if ($key == 0)
                                    gold
                                @elseif ($key == 1)
                                    silver
                                @elseif ($key == 2)
                                    #cd7f32
                                @endif
                            ">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->level }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
