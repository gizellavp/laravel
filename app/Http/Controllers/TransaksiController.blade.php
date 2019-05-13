<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$barang = DB::table('transaksi')->get();
 
    	// mengirim data pegawai ke view index
    	return view('transaksi',['id_transaksi' => $id_transaksi]);
 
    }