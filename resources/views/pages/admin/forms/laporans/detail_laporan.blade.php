@extends('layouts.admin')

@section('section-main')
    <div class="row">
        <!-- customer-section start -->
        <div class="col-xl-12 col-md-6">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Detail Laporan</h5>
                </div>
                <div class="pro-scroll" style="height:1000px;position:relative;">
                    <div class="card-body p-5">
                        <div class="mb-3 row">
                            <div class="col-4">
                                <td class="px-4 py-3 text-sm">
                                    @if ($item->status == 'Pending')
                                        <div><label class="badge bg-light-danger">{{ $item->status }}</label></div>
                                    @elseif($item->status == 'Processing')
                                        <div><label class="badge bg-light-warning">{{ $item->status }}</label></div>
                                    @elseif($item->status == 'Complete')
                                        <div><label class="badge bg-light-success">{{ $item->status }}</label></div>
                                    @endif
                                </td>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">ID LAPORAN</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="ID_LAPORAN"
                                    value="{{ $item->id }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" value="{{ $item->user_nik }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">NAME</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" value="{{ $item->name }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label">ID USER</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" value="{{ $item->user_id }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type Laporan</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                value="{{ $item->type }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description Laporan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{ $item->description }}</textarea>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Kejadian</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                    value="{{ $item->tanggal_kejadian }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Lampiran</h5>
                            <div class="h-100 p-5 bg-light border rounded-3">
                                @php
                                    $data = 'assets/images/upload/' . $item->image;
                                @endphp
                                @if ($item->image == true)
                                    <img src="{{ asset($data) }}" width="30%" alt="">
                                @else
                                    <p class="text-danger bg-outline-danger">Tidak ada lampiran...</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($item->status == 'Pending' || $item->status == 'Processing')
                <form action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="pengaduan_id" value="{{ $item->id }} ">
                    <input type="hidden" name="user_id" value="{{ $item->user_id }} ">

                    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <label class=" text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Tanggapan</span>
                            <textarea
                                class=" w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-control focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="5" cols="300" type="text" placeholder="Isi Tanggapan Anda" value="{{ old('description') }}"
                                name="tanggapan" required></textarea>
                        </label>
                        <br>
                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Status</span>
                            <select
                                class=" text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                name="status" required>
                                @if ($item->status == 'Pending')
                                    {{-- <option value="Pending">Pending</option> --}}
                                    <option value="Processing">Processing</option>
                                    <option value="Edit">Edit</option>
                                    <option value="Reject Laporan">Reject Laporan</option>
                                @elseif($item->status == 'Processing')
                                    <option value="Pending">Pending</option>
                                    <option value="Complete">Complete</option>
                                @else
                                    <option value="Pending">Pending</option>
                                    <option value="Processing">Processing</option>
                                    <option value="Complete">Complete</option>
                                @endif
                            </select>
                        </label>
                        <br>

                        <button type="submit"
                            class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Tanggapi
                        </button>
                    </div>
                </form>
            @else
                <p>Laporan ini sudah <span class="text-success">Complete</span></p>
            @endif
            <div class="card feed-card mt-5">
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
                                    <h6 class="m-b-5">Laporan pending {{ $pending }} laporan <span
                                            class="text-muted float-right f-14">Just Now</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">Laporan processing {{ $process }} <span
                                            class="text-muted float-right f-14">Just Nows</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="row m-b-25 align-items-center">
                            <div class="col-auto p-r-0">
                                <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                            </div>
                            <div class="col">
                                <a href="#!">
                                    <h6 class="m-b-5">Laporan Selesai {{ $complete }} <span
                                            class="text-muted float-right f-14">Just Now</span></h6>
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
