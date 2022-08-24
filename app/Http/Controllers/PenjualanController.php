<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    //

    public function index()
    {
        $penjualan = Penjualan::all();
        return view('welcome', compact('penjualan'));
    }

    public function showPerTanggal($tglbeli, $tgljual)
    {
        dd(['tanggal beli '.$tglbeli,'tanggal jual'.$tgljual]);
        // $showDataTanggal = Penjualan::with('nama')->whereBetween('created_at',[$tglbeli,$tgljual])->get();
        // return view('pertanggal', compact('showDataTanggal'));
    }

}
