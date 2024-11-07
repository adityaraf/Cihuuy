<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiHarian extends Model
{
    use HasFactory;

    protected $table = 'transaksi_harians'; // Ensure this matches your database table name
    protected $primaryKey = 'id'; // Update this if the primary key has a different name
    public $timestamps = false; // Set to true if you have created_at and updated_at fields

    protected $fillable = [
        'stock_code',
        'date_transaction',
        'volume',
        'value',
        'frequency'
    ];
}
