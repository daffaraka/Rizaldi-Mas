@extends('layouts.admin')

@section('section-main')
<div class="row">
    @if(Session::has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil</strong> User berhasil dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <label for="search">Search user</label>
    <form action="{{ route('search.user') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="search">
            <button type="submit" class="btn btn-primary mt-3"> Cari user</button>
        </div>
    </form>
    <!-- customer-section start -->
    <div class="col-xl-12 col-md-6">
        <div class="card table-card">
            <div class="card-header">
                <h5>List user</h5>
            </div>
            <div class="pro-scroll" style="height:300px;position:relative;">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>nik</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $user)
                                <tr class="text-gray-700 dark:text-gray-400">
                                  <td class="px-4 py-3 text-sm">
                                    {{ $user->name }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $user->nik }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $user->phone }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $user->email }}
                                  </td>
                                  <td><a href="{{ route('detail.user',$user->id) }}"><i class="icon feather icon-edit f-16  text-success"></i></a></td>
                                </tr>
                                @empty
                                <tr>
                                  <td colspan="7" class="text-center text-gray-400">
                                    Data Kosong
                                  </td>

                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-md-6">
        <div class="row">
            <div class="col-sm-12">
                <div class="card prod-p-card background-pattern">
                    <div class="card-body">
                        <div class="row align-items-center m-b-0">
                            <div class="col">
                                <h6 class="m-b-5">Total User</h6>
                                <h3 class="m-b-0">{{ $totaluser }}</h3>
                            </div>
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill text-info" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                  </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card feed-card">
            <div class="card-header">
                <h5>History</h5>
            </div>
            <div class="feed-scroll" style="height:120px;position:relative;">
                <div class="card-body">
                    <div class="row m-b-25 align-items-center">
                        <div class="col-auto p-r-0">
                            <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h6 class="m-b-5">Laporan pending  {{ $pending }}  laporan <span class="text-muted float-right f-14">Just Now</span></h6>
                            </a>
                        </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                        <div class="col-auto p-r-0">
                            <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h6 class="m-b-5">Laporan processing {{ $process }} <span class="text-muted float-right f-14">Just Nows</span></h6>
                            </a>
                        </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                        <div class="col-auto p-r-0">
                            <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h6 class="m-b-5">Laporan Selesai {{ $complete }} <span class="text-muted float-right f-14">Just Now</span></h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer-section end -->
</div>
@endsection

