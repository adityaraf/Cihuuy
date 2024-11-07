<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiHariansTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi_harians', function (Blueprint $table) {
            $table->id();
            $table->string('stock_code');
            $table->date('date_transaction');
            $table->bigInteger('volume');
            $table->bigInteger('value');
            $table->integer('frequency');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi_harians');
    }
}
