<?php

use App\Models\Bagian;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Bagian::class);
            $table->dateTime('tanggaldari');
            $table->dateTime('tanggalsampai');
            $table->longText('kegiatan');
            $table->longText('keterangan');
            $table->string('tempat')->nullable();
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('berkas')->nullable();
            $table->dateTime('notifikasi')->nullable();
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
        Schema::dropIfExists('kegiatans');
    }
}
