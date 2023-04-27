
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SILAMAS | {{ $title }}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/SILAMAS.png" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">





    {{-- toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
</head>
<style>
    /* Preloader */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999999999;
  width: 100%;
  height: 100%;
  background-color: #fff;
  overflow: hidden;
}

.preloader-inner {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.preloader-icon {
  width: 100px;
  height: 100px;
  display: inline-block;
  padding: 0px;
}

.preloader-icon span {
  position: absolute;
  display: inline-block;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  background: #0069ff;
  -webkit-animation: preloader-fx 1.6s linear infinite;
  animation: preloader-fx 1.6s linear infinite;
}

.preloader-icon span:last-child {
  animation-delay: -0.8s;
  -webkit-animation-delay: -0.8s;
}

@keyframes preloader-fx {
  0% {
    -webkit-transform: scale(0, 0);
            transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
    opacity: 0;
  }
}

@-webkit-keyframes preloader-fx {
  0% {
    -webkit-transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
    opacity: 0;
  }
}
</style>
<body>

    <style>
        .nav-item a {
       display: inline-block;
       text-decoration: none;
       transition: all 0.4s ease;
       -webkit-transition: all 0.4s ease;
       -moz-transition: all 0.4s ease;
     }
        </style>
        <!-- Start Header Area -->
         <header class="header navbar-area" >
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-lg-12">
                         <div class="nav-inner">
                             <!-- Start Navbar -->
                             <nav class="navbar navbar-expand-lg align-center" style="text-decoration:none;">
                                 <li class="nav-item text-white btn btn-light rounded-pill button ">
                                    <a href="/"><img src="../assets/img/logo/logo.png" width="34" alt=""></a>
                                     {{-- <a href="contact.html" aria-label="Toggle navigation">SILAMAS</a> --}}
                                 </li>
                                 <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                     aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="toggler-icon"></span>
                                     <span class="toggler-icon"></span>
                                     <span class="toggler-icon"></span>
                                 </button>
                                 <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                     <ul id="nav" class="navbar-nav ms-auto">
                                         <li class="nav-item">
                                             <a href="/" class="active" aria-label="Toggle navigation">Home</a>
                                         </li>
                                         <li class="nav-item">
                                             <a href="/statistik" aria-label="Toggle navigation">Statistik</a>
                                         </li>
                                         @auth

                                         <li class="nav-item">
                                             <a href="/myreport" aria-label="Toggle navigation">My Reports</a>
                                         </li>
                                         @endauth
                                     </ul>
                                 </div> <!-- navbar collapse -->
                                 <style>
                                   .nav-item.dropdown{
                                     list-style-type: none !important;
                                   }
                                 </style>
                                 @auth
                                 <div class="button" style="list-style:none !improtant;">
                                     <a class="nav-link dropdown-toggle ml-3 bg-light text-primary btn" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Hello, {{ auth()->user()->name }}
                                     </a>
                                     <li class="nav-item dropdown" style="list-style:none !improtant;">
                                             <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style:none !improtant;">
                                               <li><a class="dropdown-item text-primary" href="/profile"><i class="bi bi-gear-fill text-primary"></i> My Profile</a></li>

                                               <li><hr class="dropdown-divider"></li>
                                               <li>
                                                   <form action="/logout" method="post">
                                                     @csrf
                                                       <button type="submit" class="dropdown-item text-warning"><i class="bi bi-box-arrow-right text-warning"></i> Logout</button>
                                                   </form>
                                               </li>
                                             </ul>
                                     </li>
                                 </div>
                                 @else
                                 <div class="col-md-3 text-end">
                                     <a href="{{ url('login') }}"><button type="button" class="btn btn-outline-info me-2">Login</button></a>
                                     <a href="{{ url('register') }}"><button type="button" class="btn btn-outline-warning">Sign-up</button></a>
                                 </div>
                                 @endauth
                             </nav>
                             <!-- End Navbar -->
                         </div>
                     </div>
                 </div> <!-- row -->
             </div> <!-- container -->
         </header>
         <!-- End Header Area -->

    <div class="content">
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
                            <div class="button btn btn-outline-primary">
                                <a href="{{ route('laporans.index') }}" class="btn btn-primary">Laporkan sekarang</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!-- Start Info Search -->
    <section class="domain-search mb-5">
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
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="search-input">
                                                <label for="id"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                  </svg></label>
                                                <select>
                                                    <option value="none" selected>Lainnya</option>
                                                    <option value="none">Pengaduan</option>
                                                    <option value="none">Aspirasi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <div class="search-btn button">
                                                <button type="submit" class="btn">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Search Form --><hr class="mt-3 mb-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Info Search -->
    <section>
        <div class="container pt-5 mt-5 p-5">
            <div class="row">
              <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
                <p class="mb-5 element mt-5">Our service is always affordable for everyone. </p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Lihat Selengkapnya
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Poster</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/img/hero/howto.png') }}" width="100%" alt="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sudah paham</button>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="row h-100 pt-5 mt-5">
              <div class="col-sm-6 col-md-3">
                <div class="card card-span shadow py-4 h-auto border-top border-0 border-primary" style="min-height:280px;">
                  <div class="card-body">
                    <div class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                      </svg><br>
                      <h5 class="my-3 fw-bold">Create</h5>
                      <ul class="list-unstyled">
                        <li>  Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap  </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-span shadow py-4 h-auto border-top border-0 border-primary" style="min-height:280px;">
                  <div class="card-body">
                    <div class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                      </svg><br>
                      <h5 class="my-3 fw-bold">Processing</h5>
                      <ul class="list-unstyled">
                        <li>
                            Dalam jangka waktu 2x24 jam, Laporan akan dilakukan pengecekan
                        </li>
                        <p>dan kemudian akan ditindaklanjuti</p>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-span shadow py-4 h-auto border-top border-0 border-primary" style="min-height:280px;">
                  <div class="card-body">
                    <div class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                      </svg>
                      <h5 class="my-3 fw-bold">Feedbacks</h5>
                      <ul class="list-unstyled">
                        <li>Anda dapat menanggapi kembali balasan yang diberikan oleh instansi dalam waktu 10 hari</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-span shadow py-4 h-auto border-top border-0 border-primary" style="min-height:280px;">
                  <div class="card-body">
                    <div class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                      </svg>
                      <h5 class="my-3 fw-bold">Complete</h5>
                      <ul class="list-unstyled">
                        <li>Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="conatiner">
            <div class="text-center">
                <h3 class="text-primary">How Can We Help You?</h3>
                <p class="lead">Berikan Kami Solusi Supaya Kami Perbaiki!</p>
            </div>
            <div class=" d-flex align-items-center justify-content-center">
                <div class="bg-white col-md-4">
                    <div class="p-4 rounded shadow-md">
                        <div>
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                        </div class="mt-3">
                        <div class="mt-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" cols="20" rows="6" class="form-control"
                                placeholder="message"></textarea>
                        </div>
                        <button class="btn btn-primary">
                            Submit Form
                        </button>
                    </div>
                </div>
            </div>
        </div>
      </section>
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
    </div>


    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up-circle"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script>
            (function () {
        //===== Prealoder

        window.onload = function () {
            window.setTimeout(fadeout, 500);
        }

        function fadeout() {
            document.querySelector('.preloader').style.opacity = '0';
            document.querySelector('.preloader').style.display = 'none';
        }


        // WOW active
        new WOW().init();


        /*=====================================
        Sticky
        ======================================= */
        window.onscroll = function () {
            var header_navbar = document.querySelector(".navbar-area");
            var sticky = header_navbar.offsetTop;

            var logo = document.querySelector('.navbar-brand img')
            if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
            logo.src = 'assets/images/logo/logo.svg';
            } else {
            header_navbar.classList.remove("sticky");
            logo.src = 'assets/images/logo/white-logo.svg';
            }

            // show or hide the back-top-top button
            var backToTo = document.querySelector(".scroll-top");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                backToTo.style.display = "flex";
            } else {
                backToTo.style.display = "none";
            }
        };


        //===== mobile-menu-btn
        let navbarToggler = document.querySelector(".mobile-menu-btn");
        navbarToggler.addEventListener('click', function () {
            navbarToggler.classList.toggle("active");
        });


    })();
    </script>
        {{-- toastr js--}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        </script>

    <!-- Bootstrap JavaScript -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
