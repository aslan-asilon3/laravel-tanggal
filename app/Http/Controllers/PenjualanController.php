<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Penjualan;
use Carbon\Carbon;
use App\Models\Registrant;

class PenjualanController extends Controller
{
    //

    public function index()
    {
        $penjualan = Penjualan::all();
        return view('welcome', compact('penjualan'));
    }

    

    // public function laporan()
    // {
    //     // $penjualan = Penjualan::all();
    //     return view('', compact('penjualan'));
    // }

    

    public function showPerTanggal()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $data = Registrant::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $data = Registrant::latest()->get();
        }
        return view('reservator.laporan.index', compact('data'));
    }

}
