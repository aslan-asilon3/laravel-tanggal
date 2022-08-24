<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;
use Carbon\Carbon;
use App\Models\Registrant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporan',[PenjualanController::class,'showPerTanggal'])->name('laporan-index');
// Route::get('/laporan/filter-tanggal',[PenjualanController::class,'showPerTanggal'])->name('laporan-filter-tanggal');


Route::get('/laporan/filter-tanggal', function () {
    if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $data = App\Models\Registrant::whereBetween('created_at',[$start_date,$end_date])->get();
    } else {
        $data = App\Models\Registrant::latest()->get();
    }
    
    return view('reservator.laporan.index', compact('data'));
});
