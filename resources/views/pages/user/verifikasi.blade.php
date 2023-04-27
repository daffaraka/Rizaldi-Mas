@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Verifikasi</div>

          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif

            @if (session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
              </div>
            @endif
            @if (Auth::user()->verified_at)
            <div class="alert alert-success">
              User sudah di-verify.
            </div>
            @else
            <form method="POST" action="{{ route('verifikasi.store') }}">
              @csrf
                <p>Copy code berikut : <span class="text-danger">{{ $kode }}</span></p>
              <div class="form-group row">
                <label for="kode_verifikasi" class="col-md-4 col-form-label text-md-right">Kode Verifikasi</label>

                <div class="col-md-6">
                  <input id="kode_verifikasi" type="text" class="form-control @error('kode_verifikasi') is-invalid @enderror" name="kode_verifikasi" value="{{ old('kode_verifikasi') }}" required autofocus>

                  @error('kode_verifikasi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Verifikasi
                  </button>
                </div>
              </div>
            </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
