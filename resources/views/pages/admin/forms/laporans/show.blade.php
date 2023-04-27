@extends('layouts.admin')

@section('section-main')
<div class="row">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> Laporan berhasil dilakukan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(Session::has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> Laporan berhasil dihapus.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- customer-section start -->
        <div class="col-xl-12 col-md-6">
            <div class="card table-card">
                <div class="card-header">
                    <h5 class="text-danger">List Laporan </h5>
                </div>
                <div class="pro-scroll" style="height:700px;position:relative;">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>id laporan</th>
                                        <th>user-nik</th>
                                        <th>name</th>
                                        <th>type</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pengaduan as $user)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $user->user_nik }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $user->type }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        @if($user->status == "Pending")
                                        <div><label class="badge bg-light-danger">{{ $user->status }}</label></div>
                                        @elseif($user->status == "Processing")
                                        <div><label class="badge bg-light-warning">{{ $user->status }}</label></div>
                                        @elseif($user->status == "Complete")
                                        <div><label class="badge bg-light-success">{{ $user->status }}</label></div>
                                        @elseif($user->status == "Edit")
                                        <div><label class="badge bg-light-info">{{ $user->status }}</label></div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('detail.laporan',$user->id) }}"><i class="icon feather icon-edit f-16  text-success"></i></a> &nbsp;&nbsp;&nbsp;
                                        <form action="{{ route('destroy.laporan', $user->id)}}" method="POST">
                                            @csrf
                                            <button
                                            onclick="return confirm('Are you sure you want to delete this?')"
                                            class="feather icon-trash-2 btn ml-3 f-16 text-danger d-block d-inline mx-0 d-flex"
                                            aria-label="Delete">
                                            </button>
                                        </form>
                                    </td>
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

