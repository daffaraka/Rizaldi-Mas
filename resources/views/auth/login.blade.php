@extends('layouts.main')
@section('content')
<style>
    .body{
        background: url('assets/img/hero/bg-sign.png') !important;
        background-size: cover !important;
        background-position: center !important;
    }
</style>
<section class="body" style="background: url('../assets/images/hero/bg-sign.png');">
    <div class="container col-xl-6 col-xxl-12 px-2 py-3">
        <div class="row align-items-center g-lg-2 py-5">
          <div class="col-lg-6 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">SILAMAS.id</h1>
            <p class="col-lg-12 fs-3">
                Silamas adalah aplikasi pengaduan masyarakat yang menampung aspirasi masyarakat secara online,
                yang dapat memudahkan masyarakat untuk menyampaikan pengaduannya.</p>
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            @if(Session::has('success'))
            <div class='container-fluid d-flex justify-content-end' style='position:relative;top:0;right:0;'>
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
          @if(Session::has('error'))
          <div class='container-fluid d-flex justify-content-end' style='position:relative;top:0;right:0;'>
              <div class='toast mb-3 show' role='alert' aria-live='assertive' aria-atomic='true'>
              <div class='toast-header'>

                  <svg class='placeholder col-1 rounded me-2 bg-danger' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#7CFC00'></rect>
                  </svg>

                  <strong class='me-auto'>Alert !</strong>
                  <small>Just now</small>
                  <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
              </div>
              <div class='toast-body bg-light text-success'>
                  {{ Session::get('error') }}
              </div>
              </div>
          </div>
        @endif
            <form  method="POST" action="{{ route('login') }}" class="p-4 p-md-5 border rounded-3 bg-light">
                @csrf
                <span class="text-center"><img src="../assets/img/logo/logo.png"  class=" text-center" width="30%" alt=""></span>
                <span class="text-center fw-bold mb-3 mt-5">SIGN IN</span>
              <div class="form-floating mb-3">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="email anda...">
                <label for="email">email</label>
              </div>
              @error('email')
              <div class="alert alert-danger" role="alert">
                  {{ $message }}
              </div>
              @enderror
              <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              @error('password')
              <div class="alert alert-danger" role="alert">
                  {{ $message }}
              </div>
              @enderror
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
              <p>Tidak punya akun? <a href="/register" class="ml-3">Register</a></p>
              <hr class="my-4">
              <small class="text-muted">By clicking Sign In, you agree to the terms of use.</small>
            </form>
          </div>
        </div>
    </div>

</section>
@endsection
