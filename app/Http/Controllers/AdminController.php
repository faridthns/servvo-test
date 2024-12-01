<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //
        $db = Pengajuan::all();
        return view('admin.index', compact('db'));
    }

    public function edit(Pengajuan $id)
    {
        //
        return view('admin.edit', compact('id'));
    }

    public function update(Request $request, string $id)
{
    // validasi data
    $request->validate([
        'status' => 'required',
        'tanggal_pengerjaan' => 'required',
        'tanggal_selesai' => 'required'
    ],
    [
        'status.required' => 'Status wajib diisi',
        'tanggal_pengerjaan.required' => 'Tanggal wajib diisi',
        'tanggal_selesai.required' => 'Tanggal wajib diisi',
    ]);

    //update data produk
    DB::table('pengajuans')->where('id',$id)->update([
        'status'=>$request->status,
        'tanggal_pengerjaan'=>$request->tanggal_pengerjaan,
        'tanggal_selesai'=>$request->tanggal_selesai,
    ]);
            
    return redirect()->route('admin.index');
}
}
