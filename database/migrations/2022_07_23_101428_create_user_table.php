<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('nama_pelanggan', 255);
            $table->string('email', 190)->unique();
            $table->string('no_handphone', 15)->unique();
            $table->string('nik', 16);
            $table->enum('status',['active','non_active','need_activation']);
            $table->timestamps();

            /*Primary Key ID User */
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
