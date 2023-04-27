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
    {{-- @if (!Auth::user()->email_verified_at)
    <script>
        function verifyUser() {
        alert('User belum di-verify. Anda tidak dapat melakukan pengaduan laporan.');
        window.location.href = '{{ route('verifikasi.index') }}';
        return false;
        }
    </script>
    @endif --}}
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            ISI FORMULIR PENGADUAN
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Domain Search -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="../assets/img/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/img/shapes/shape.png" alt="#">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="content">
                            <h2><span>Punya problem?</span>Silahkan Lapor</h2>
                            <!-- Start Search Form -->
                            {{-- @if (Auth::user()->email_verified_at)
                            <div class="alert alert-success">
                                User sudah di-verify.
                            </div>
                            @else --}}
                            <form action="{{ route('laporans.store')}} " method="POST" enctype="multipart/form-data" class="p-3">
                                @csrf
                                <div class="form-group">
                                    <div for="">Type Laporan</div>
                                    <div class="btn-group d-flex mt-3" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" value="Pengaduan" name="type" id="btnradio1" checked>
                                        <label class="btn btn-outline-primary" for="btnradio1">Pengaduan</label>

                                        <input type="radio" class="btn-check" value="Aspirasi" name="type" id="btnradio2" >
                                        <label class="btn btn-outline-primary"  for="btnradio2">Aspirasi</label>

                                        <input type="radio" class="btn-check" value="Lainnya" name="type" id="btnradio3" >
                                        <label class="btn btn-outline-primary"  for="btnradio3">Lainnya</label>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="">
                                        <span class="">Laporan</span>
                                        <textarea
                                        class="form-control"
                                        rows="8" cols="100" type="text" placeholder="Deskripsi kan laporan Anda" value="{{ old('description')}}" required
                                        name="description"></textarea>
                                    </label>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="">
                                        <span class="">Lokasi (jika tipe laporan 'Lainnya' kosongkan saja atau isi dengan '-')</span>
                                        <textarea
                                        class="form-control"
                                        rows="4" cols="100" type="text" placeholder="Kejadian laporan nya dimana jelasin" value="{{ old('lokasi')}}" required
                                        name="lokasi"></textarea>
                                    </label>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="">
                                        <span class="">Tanggal(Kejadian nya kapan?)</span>
                                        <input
                                        class="form-control w-100"
                                        type="date" value="{{ old('tanggal_kejadian')}}" name="tanggal_kejadian" required/>
                                    </label>
                                </div>

                                <div class="form-group mt-3">
                                    <span class="text-gray-700 dark:text-gray-400">Foto</span>
                                    <input
                                        class=" form-control"
                                        type="file" value="{{ old('image')}}" name="image" required/>
                                </div>
                                <div class="form-group mt-3">
                                    <div for="">Nama mau ditampilkan?</div>
                                    <div class="btn-group d-flex mt-3" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" value="Ya" name="secret" id="ya" checked>
                                        <label class="btn btn-outline-primary" for="ya">Ya</label>

                                        <input type="radio" class="btn-check" value="Tidak" name="secret" id="tidak" >
                                        <label class="btn btn-outline-danger"  for="tidak">Tidak</label>
                                    </div>
                                </div>

                                    <button type="submit"
                                    class="mt-4 px-4 py-2 text-sm font-medium btn btn-primary d-flex ms-auto">
                                    Submit
                                    </button>
                            </form>
                            <!-- End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Domain Search -->

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
