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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grup_id');
            $table->string('nik', 16);
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp', 16);
            $table->string('no_telp_orgtua', 16);
            $table->boolean('checkout')->default(true);
            $table->enum('jenis_kelamin', ['L', 'P']);
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
        Schema::dropIfExists('pelanggans');
    }
};
