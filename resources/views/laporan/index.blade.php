<!DOCTYPE html>
<html>
<head>
    <title>Daftar Laporan Warga</title>
</head>
<body>
    <h2>Daftar Laporan Warga</h2>
    <a href="{{ route('laporan.create') }}">+ Tambah Laporan Baru</a>
    <br><br>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Isi Laporan</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
        </tr>
        @foreach($laporans as $laporan)
        <tr>
            <td>{{ $laporan->id }}</td>
            <td>{{ $laporan->nama }}</td>
            <td>{{ $laporan->judul }}</td>
            <td>{{ $laporan->isi_laporan }}</td>
            <td>{{ $laporan->lokasi }}</td>
            <td>{{ $laporan->created_at->format('d-m-Y H:i') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
