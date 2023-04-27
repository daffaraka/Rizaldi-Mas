
@extends('layouts.main')
@section('content')
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
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Registrasi
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Register  -->
    <section class="domain-search">
        <div class="container mb-3">
            <div class="inner-cotainer">
                <img class="sahpe" src="../assets/img/shapes/shape.png" alt="#">
                <img class="sahpe2" src="../assets/img/shapes/shape.png" alt="#">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="content">
                            <span class="text-center"><img src="../assets/img/logo/logo.png"  class="mb-3 text-center mx-auto" width="30%" alt=""></span>
                            <h2 class="text-center mb-5"><span></span>Formulir Registrasi</h2>
                            <!-- Start Register Form -->
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group mt-3">
                                  <label for="nik">NIK</label>
                                  <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                                </div>
                                @error('nik')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group mt-3">
                                  <label for="name">Nama Lengkap</label>
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group mt-3">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group mt-3">
                                  <label for="phone">No HP</label>
                                  <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                </div>
                                @error('phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Alamat lengkap ya..">{{ old('address') }}</textarea>
                                  </div>
                                  @error('address')
                                  <div class="alert alert-danger" role="alert">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                  <div class="form-group mt-3">
                                    <label for="gender">Gender</label>
                                    <div class="form-check">
                                      <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender1" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }}>
                                      <label class="form-check-label" for="gender1">
                                        Laki-laki
                                      </label>
                                      @error('gender')
                                      <div class="alert alert-danger" role="alert">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input @error('lastname') is-invalid @enderror" type="radio" name="gender" id="gender2" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}>
                                      <label class="form-check-label" for="gender2">
                                        Perempuan
                                      </label>
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                                </div>
                                @error('password')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                  <button type="submit" class="btn btn-primary mt-5 w-100">Daftar</button>
                            </form>
                            <p>Sudah punya akun? <a href="/login">Login</a></p>
                            <!-- End Register Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register  -->
