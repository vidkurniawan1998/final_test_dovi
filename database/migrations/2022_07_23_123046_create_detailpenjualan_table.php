<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailpenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpenjualan', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('id_produk');
            $table->unsignedInteger('id_order');
            $table->string('item', 255);
            $table->integer('qty');
            $table->decimal('harga_satuan', 15, 2);
            $table->decimal('sub_total', 15, 2);
            $table->timestamps();

            /*Primary Key ID Detail Penjualan */
            $table->primary('id');

            /*Foreign Key ID Produk dan ID Order */
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_order')->references('id')->on('order')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailpenjualan');
    }
}
