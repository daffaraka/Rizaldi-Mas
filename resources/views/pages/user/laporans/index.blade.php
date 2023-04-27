@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Laporan</h1>
        <a href="{{ route('laporans.create') }}" class="btn btn-primary mb-3">Tambah Laporan</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Type</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Pihak Terkait</th>
                    <th>Gambar</th>
                    <th>Secret</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporans as $laporan)
                    <tr>
                        <td>{{ $laporan->id }}</td>
                        <td>{{ $laporan->judul }}</td>
                        <td>{{ $laporan->deskripsi }}</td>
                        <td>{{ $laporan->type}}</td>
                        <td>{{ $laporan->tanggal}}</td>
                        <td>{{ $laporan->lokasi}}</td>
                        <td>{{ $laporan->pihak_terkait}}</td>
                        <td>{{ $laporan->gambar}}</td>
                        <td>{{ $laporan->secret}}</td>
                        <td>{{ $laporan->status}}</td>
                        <td>{{ $laporan->aksi}}</td>
