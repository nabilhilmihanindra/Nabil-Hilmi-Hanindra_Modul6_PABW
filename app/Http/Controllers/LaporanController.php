<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'isi_laporan' => 'required',
            'lokasi' => 'required',
        ]);

        Laporan::create($request->all());
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil disimpan!');
    }

    public function index()
    {
        $laporans = Laporan::all();
        return view('laporan.index', compact('laporans'));
    }
}
