@extends('layouts.admin')

@section('section-main')
<div class="row">
    @if(Session::has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil</strong> Laporan berhasil dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <p>Sangat Puas: {{ $sp }}</p>
    <p>Puas: {{ $p }}</p>
    <p>Tidak Puas: {{ $tp }}</p>
    <!-- Tabel daftar pengaduan -->
    <table class="table table-light table-hover p-5">
        <thead class="table-light">
            <tr >
                <th>ID LAPORAN</th>
                <th>pengaduan_id</th>
                <th>petugas_id</th>
                <th>user_id</th>
                <th>feedback_user</th>
                <th>created_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <style>
            .p-desc {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            }
         </style>
        <tbody>
            @forelse ($results_p as $complaint)
                <tr class="col-sm-4">
                    <td>{{ $complaint->id }}</td>
                    <td>{{ $complaint->pengaduan_id }}</td>
                    <td>{{ $complaint->petugas_id }}</td>
                    <td>{{ $complaint->user_id }}</td>
                    <td>{{ $complaint->feedback_user }}</td>
                    <td>{{ $complaint->created_at }}</td>
                    <td class="px-4 py-3 text-sm">
                        @if($complaint->status == "Pending")
                        <div><label class="badge bg-light-danger">{{ $complaint->status }}</label></div>
                        @elseif($complaint->status == "Processing")
                        <div><label class="badge bg-light-warning">{{ $complaint->status }}</label></div>
                        @elseif($complaint->status == "Complete")
                        <div><label class="badge bg-light-success">{{ $complaint->status }}</label></div>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('detail.laporan', $complaint->id) }}" class="icon feather icon-edit"></a>
                        <form action="{{ route('destroy.laporan', $complaint->id)}}" method="POST">
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
                <tr class="text-center">
                    <td colspan="6" class="text-danger">No Results Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
