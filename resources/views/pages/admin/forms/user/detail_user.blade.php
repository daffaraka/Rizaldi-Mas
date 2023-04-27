@extends('layouts.admin')

@section('section-main')
<div class="row">
    @if(Session::has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil</strong> User berhasil dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- customer-section start -->
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Detail user</h5>
            </div>
            <div>
                <div class="card-body p-5">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nik</th>
                                    <th>Name</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>level</th>
                                    <th>address</th>
                                    <th>gender</th>
                                    <th>roles</th>
                                    <th>created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($item == True)


                                <tr class="text-gray-700 dark:text-gray-400">
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->id }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->nik }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->name }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->phone }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->email }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->level }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->address }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->gender }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->roles }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->created_at }}
                                  </td>
                                  <td>                                        
                                    <form action="{{ route('delete.user', $item->id)}}" method="POST">
                                        @csrf
                                        <button
                                            onclick="return confirm('Are you sure you want to delete this?')"
                                            class="feather icon-trash-2 btn ml-3 f-16 text-danger d-block d-inline mx-0 d-flex"
                                            aria-label="Delete">
                                        </button>
                                    </form>
                                  </td>
                                </tr>
                                @else
                                <tr>
                                  <td colspan="7" class="text-center text-gray-400">
                                    Data Kosong
                                  </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer-section end -->
</div>
@endsection

