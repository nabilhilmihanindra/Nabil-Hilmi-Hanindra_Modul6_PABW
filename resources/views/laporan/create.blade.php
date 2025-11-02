<!DOCTYPE html>
<html>
<head>
    <title>Form Laporan Warga</title>
</head>
<body>
    <h2>Form Laporan Warga</h2>
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Judul Laporan:</label><br>
        <input type="text" name="judul"><br><br>

        <label>Isi Laporan:</label><br>
        <textarea name="isi_laporan"></textarea><br><br>

        <label>Lokasi:</label><br>
        <input type="text" name="lokasi"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
