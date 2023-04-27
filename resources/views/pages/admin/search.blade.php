@extends('layouts.admin')

@section('section-main')
<div class="row">
    @if(Session::has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil</strong> Laporan berhasil dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <label for="search">Search</label>
    <form action="{{ route('search.laporan') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="search">
            <button type="submit" class="btn btn-primary mt-3"> Cari</button>
        </div>
    </form>
    <!-- Tabel daftar pengaduan -->
    <table class="table table-light table-hover p-5">
        <thead class="table-light">
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($results as $complaint)
                <tr>
                    <td>{{ $complaint->id }}</td>
                    <td>{{ $complaint->name }}</td>
                    <td>{{ $complaint->type }}</td>
                    <td>{{ $complaint->description }}</td>
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
