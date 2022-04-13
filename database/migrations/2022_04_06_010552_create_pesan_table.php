<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->text('nama_pemesan');
            $table->string('email');
            $table->integer('no_hp');
            $table->text('nama_tamu');
            $table->foreignId('kamar_id');
            $table->timestamp('checkIn')->nullable();
            $table->timestamp('checkOut')->nullable();
            $table->integer('jmlh_kamar');
            $table->double('harga');
            $table->enum('status', ['checkin', 'checkout', 'belum ada']);
            $table->string('ref_pesan');
            $table->foreignId('user_id');
            $table->timestamps();

            // $table->id();
            // $table->string('nama_tamu');
            // $table->string('email');
            // $table->integer('no_hp');
            // $table->timestamp('tgl_checkin');
            // $table->timestamp('tgl_checkout');
            // $table->integer('jmlh_kamar');
            // $table->integer('harga');
            // $table->string('status');
            // $table->string('ref_pesan');
            // $table->foreignId('user_id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan');
    }
}
