<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('id_user');
            $table->string('nama_pelanggan', 255);
            $table->date('tanggal');
            $table->time('jam');
            $table->decimal('total', 15, 2);
            $table->decimal('bayar_tunai', 15, 2);
            $table->decimal('kembali', 15, 2);
            $table->timestamps();

            /*Primary Key ID Order */
            $table->primary('id');

            /*Foreign Key ID User */
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
