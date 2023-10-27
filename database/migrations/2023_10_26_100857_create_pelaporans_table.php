<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();
            $table->foreignID('periode_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('koperasi_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->text('keterangan');
            $table->text('keterangan_verifikator');
            $table->string('file');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('status')->default(1)->comment('0 menunggu verifikasi, 1 disetujui, 2 revisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelaporans');
    }
}
