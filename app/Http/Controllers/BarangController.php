<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = DB::table('barang')->get();
 
    	// mengirim data pegawai ke view index
    	return view('table',['barang' => $barang]);
 
    }

    public function tambah()
    {
    	return view('addBarang');
    }
    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'id_barang'=>$request->id_barang,
            'nama_barang'      =>$request->nama_barang,
            'stok'    =>$request->stok,
            'harga'      =>$request->harga,
            'deskripsi'       =>$request->deskripsi
        ]);
        return redirect('/table');
    }
    public function edit($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $barang = DB::table('barang')->where('id_barang',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('editBarang',['barang' => $barang]);
 
}

public function update(Request $request)
{
    // update data pegawai
    DB::table('barang')->where('id_barang',$request->id_barang)->update([
        'nama_barang' => $request->nama_barang,
        'stok' => $request->stok,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/table');
}

public function hapus($id_barang)
{
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('barang')->where('id_barang',$id_barang)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('/table');
}

}

