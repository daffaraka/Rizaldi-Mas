
@extends('layouts.main')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-silamas.png') }}" />
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
    <style>
        .element {
        animation: slidein 5s;
        }
        .element.animated {
        animation: slidein 4.3s;
  }

        @keyframes slidein {
        from {
            transform: translateX(-100%);
        }
        to {
            transform: translateX(0);
        }
        }
    </style>
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
        <script>
            var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.intersectionRatio > 0) {
                // Element is now visible in the viewport
                entry.target.classList.add('animated');
                } else {
                // Element is no longer visible in the viewport
                entry.target.classList.remove('animated');
                }
            });
            });

            var element = document.querySelector('.element');
            observer.observe(element);
      </script>
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
