<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penjualan;
use Carbon\Carbon;

class TanggalSeeder extends Seeder
{

    public function run()

    {

        $penjualan = [
            [
                'nama'=>'aslan1',
                'tgl_beli'=> Carbon::parse('2022-08-01'),
                'tgl_jual'=> Carbon::parse('2022-08-02'),

            ],
            [
                'nama'=>'aslan2',
                'tgl_beli'=> Carbon::parse('2022-08-04'),
                'tgl_jual'=> Carbon::parse('2022-08-08'),

            ],

        ];



        foreach ($penjualan as $key => $value) {

            Penjualan::create($value);

        }

    }
}
