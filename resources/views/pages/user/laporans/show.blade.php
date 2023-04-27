@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Laporan</h1>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>ID</th>
                        <td>{{ $laporan->id }}</td>
                </tr>
                <tr>
                    <th>Judul</th>
                        <td>{{ $laporan->judul }}</td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                        <td>{{ $laporan->deskripsi }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                        <td>{{ $laporan->type }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                        <td>{{ $laporan->tanggal }}</td>
                </tr>
                <tr>
                    <th>Lokasi</th>
                        <td>{{ $laporan->lokasi }}</td>
                </tr>
                <tr>
                    <th>Pihak Terkait</th>
                        <td>{{ $laporan->pihak_terkait }}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                        <td>{{ $laporan->gambar }}</td>
                </tr>
                <tr>
                    <th>Secret</th>
                        <td>{{ $laporan->secret }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                        <td>{{ $laporan->status }}</td>
                </tr>
            </tbody>
         </table>
         <a href="{{ route('laporans.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection

