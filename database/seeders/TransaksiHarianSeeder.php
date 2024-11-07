<?php

namespace Database\Seeders;

use App\Models\TransaksiHarian;
use Illuminate\Database\Seeder;

class TransaksiHarianSeeder extends Seeder
{
    public function index()
    {
        $transaksiHarians = \App\Models\TransaksiHarian::all();
        return view('transaksi_harian.datatable', compact('transaksiHarians'));
    }
    
}
    