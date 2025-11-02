@extends('layouts.app')

@section('title', 'Laporan Saya')

@section('content')
<div class="content">
  <div class="table-container">
    <h2>Status Laporan :</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Jenis Masalah</th>
          <th>Deskripsi</th>
          <th>Jalan</th>
          <th>Kota</th>
          <th>Tanggal Kejadian</th>
          <th>Waktu Kejadian</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($laporans as $laporan)
        <tr>
          <td>{{ $laporan->Laporan_ID }}</td>
          <td>{{ $laporan->Jenis_masalah }}</td>
          <td>{{ $laporan->Deskripsi }}</td>
          <td>{{ $laporan->Jalan }}</td>
          <td>{{ $laporan->Kota }}</td>
          <td>{{ $laporan->Tanggal_kejadian }}</td>
          <td>{{ $laporan->Waktu_kejadian }}</td>
          <td>{{ $laporan->Status_laporan }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
