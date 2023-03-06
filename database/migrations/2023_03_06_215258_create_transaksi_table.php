<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->string('id_customer');
            $table->string('id_karyawan');
            $table->string('tgl_transaksi');
            $table->string('customer');
            $table->enum('status_order', ['Process', 'Done', 'Delivery'])->default('Process');
            $table->enum('status_payment', ['Pending', 'Success']);
            $table->string('paket');
            $table->string('hari');
            $table->string('harga');
            $table->string('disc')->nullable();
            $table->string('harga_akhir')->nullable();
            $table->string('tgl');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('tgl_ambil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
