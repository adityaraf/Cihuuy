<?php

namespace App\Http\Controllers;

use App\Models\TransaksiHarian;
use Illuminate\Http\Request;

class TransaksiHarianController extends Controller
{
    public function index()
    {
        // Retrieve all records from the transaksi_harian table
        $transaksiHarians = TransaksiHarian::all();

        // Pass the data to the view
        return view('transaksi_harian.datatable', compact('transaksiHarians'));
    }
}
