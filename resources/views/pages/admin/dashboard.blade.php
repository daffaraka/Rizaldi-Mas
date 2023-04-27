@extends('layouts.admin')

@section('section-main')
<div class="row">
    <!-- support-section start -->
    <div class="col-xl-6 col-md-12">
        <div class="card flat-card">
            <div class="row-table">
                <div class="col-sm-6 card-body br">
                    <div class="row">
                        <div class="col-sm-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill text-info" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                        </div>
                        <div class="col-sm-8 text-md-center">
                            <h5>{{ $user }}</h5>
                            <span>User</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                    <div class="row">
                        <div class="col-sm-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-exclamation-fill text-warning" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z"/>
                              </svg>
                        </div>
                        <div class="col-sm-8 text-md-center">
                            <h5>{{ $pengaduan }}</h5>
                            <span>Laporan Masuk</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-send-check-fill text-success" viewBox="0 0 16 16">
                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                              </svg>
                        </div>
                        <div class="col-sm-8 text-md-center">
                            <h5>{{ $tanggapan }}<h5>
                            <span>Tanggapan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-table">
                <div class="col-sm-6 card-body br">
                    <div class="row">
                        <div class="col-sm-4">
                            <i class="material-icons-two-tone text-danger mb-1">swap_horizontal_circle</i>
                        </div>
                        <div class="col-sm-8 text-md-center">
                            <h5>{{ $pending }}</h5>
                            <span>Pending</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-none d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                    <div class="row">
                        <div class="col-sm-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-rocket-takeoff-fill text-info" viewBox="0 0 16 16">
                                <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z"/>
                                <path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z"/>
                              </svg>
                        </div>
                        <div class="col-sm-8 text-md-center">
                            <h5>{{ $process }}</h5>
                            <span>Processing</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                              </svg>
                        </div>
                        <div class="col-sm-8 text-md-center">
                            <h5>{{ $complete }}</h5>
                            <span>Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">{{ $type_p }}</h2>
                        <span class="text-primary">Total Type Laporan Pengaduan</span>
                    </div>
                    <div id="support-chart"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">{{ $type_a }}</h2>
                        <span class="text-primary">Total Type Laporan Aspirasi</span>
                    </div>
                    <div id="support-chart2"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">{{ $type_l }}</h2>
                        <span class="text-primary">Total Type Laporan Lainnya</span>
                    </div>
                    <div id="support-chart4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- support-section end -->

    <!-- customer-section start -->
    <div class="col-xl-6 col-md-12">
        <div class="card">
            <div class="card-body">
                <h6>Count of Type Reporting</h6>
                <span>Perbandingan spesifik dari chart type Pengaduan, Aspirasi dan Lainnya.</span>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col">
                        <div id="satisfaction-chart"></div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                        <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                        <a href="#!">
                            <h6 class="m-b-5">You have {{ $pending }} pending reporting. <span class="text-muted float-right f-14">Just Now</span></h6>
                        </a>
                    </div>
                </div>
                <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                        <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                        <a href="#!">
                            <h6 class="m-b-5">You have {{ $process }} processing reporting.  <span class="text-muted float-right f-14">30 min ago</span></h6>
                        </a>
                    </div>
                </div>
                <div class="row m-b-25 align-items-center">
                    <div class="col-auto p-r-0">
                        <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                    </div>
                    <div class="col">
                        <a href="#!">
                            <h6 class="m-b-5">You have {{ $complete }} complete reporting. <span class="text-muted float-right f-14">Just Now</span></h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer-section end -->
</div>

@endsection

