<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_dokter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_dokter');
            $table->string('alamat_dokter');
            $table->string('username_dokter');
            $table->string('password_dokter');
            $table->string('confirm_password_dokter');
            $table->string('email_dokter');
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
        Schema::dropIfExists('biodata_dokter');
    }
}
