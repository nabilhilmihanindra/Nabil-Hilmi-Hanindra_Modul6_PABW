@extends('layouts.app')

@section('title', 'Buat Laporan')

@section('content')
<div class="container">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="logo-container">
        <img src="{{ asset('assets/logo.jpg') }}" alt="Sahabat Warga Logo" class="logo">
        <h3 class="site-title">Sahabat Warga</h3>
      </div>
    </div>

    <div class="sidebar-content">
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class='bx bx-home-alt'></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item active">
          <a href="{{ route('buatlaporan') }}" class="nav-link">
            <i class='bx bx-edit'></i>
            <span>Buat Laporan</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('laporansaya') }}" class="nav-link">
            <i class='bx bx-clipboard-detail'></i>
            <span>Laporan Saya</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('notifikasi') }}" class="nav-link">
            <i class='bx bx-bell'></i>
            <span>Notifikasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kotaktinjauan') }}" class="nav-link">
            <i class='bx bx-contact-book'></i>
            <span>Kotak Tinjauan</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="sidebar-footer">
      <p>© 2023 Sahabat Warga</p>
    </div>
  </div>

  <div class="report-form">
    <div class="profile-icon">
      <img src="{{ asset('assets/logo.jpg') }}" alt="Profile">
    </div>
    <h2>Sistem Pelaporan Masalah Warga</h2>

    {{-- Form kirim laporan --}}
    <form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="Nama" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="Email" required>
      </div>

      <div class="form-group">
        <label>No HP</label>
        <input type="number" name="No_hp" placeholder="+62" required>
      </div>

      <div class="form-group">
        <label>Tanggal Kejadian</label>
        <input type="date" name="Tanggal_kejadian" required>
      </div>

      <div class="form-group">
        <label>Waktu Kejadian</label>
        <input type="time" name="Waktu_kejadian" required>
      </div>

      <div class="form-group">
        <label>Foto / Video (opsional)</label>
        <input type="file" name="foto">
      </div>

      <div class="form-group">
        <label>Deskripsi Kejadian</label>
        <textarea name="Deskripsi" placeholder="Ceritakan kejadian..." required></textarea>
      </div>

      <div class="button-container">
        <button type="submit" class="submit-button">Kirim Laporan</button>
      </div>
    </form>
  </div>
</div>
@endsection
