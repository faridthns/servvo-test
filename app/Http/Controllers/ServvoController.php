<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ServvoController extends Controller
{
    public function index()
    {
        //
        $db = Pengajuan::all()->where('nama', '=', 'customer');
        return view('servvo.index', compact('db'));
    }

    public function create()
    {
        //
        return view('servvo.create');
    }

    public function store(Request $request)
{
    // melakukan validasi data
    $request->validate([
        'nama' => 'required',
        'produk' => 'required',
        'tanggal' => 'required',
        'lokasi' => 'required',
    ],
    [
        'nama.required' => 'Nama wajib diisi',
        'produk.required' => 'Produk wajib diisi',
        'tanggal.required' => 'Tanggal wajib diisi',
        'lokasi.required' => 'Lokasi wajib diisi',
    ]);

    //tambah data produk
    DB::table('pengajuans')->insert([
        'nama'=>$request->nama,
        'produk'=>$request->produk,
        'tanggal'=>$request->tanggal,
        'lokasi'=>$request->lokasi,
        'status'=>'Belum Dikonfirmasi',
        'createdAt'=> now()->format('Y-m-d'),
    ]);
    
    return redirect()->route('index.index');
}
}
