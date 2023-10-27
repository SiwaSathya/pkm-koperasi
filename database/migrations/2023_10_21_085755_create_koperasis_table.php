<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoperasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koperasis', function (Blueprint $table)  {
            $table->id();
            $table->foreignID('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->date('badan_hukum_tanggal')->nullable();
            $table->string('badan_hukum_nomor', 200)->nullable();
            $table->enum('badan_hukum_pengesahan_id', [
                '1. Deputi Bidang Kelembagaan KUKM Atas Nama Menteri',
                '2. Gubernur Atas Nama Menteri',
                '3. Bupati/Walikota Atas Nama Menteri',
                '0.Tidak Tahu',
            ])->nullable();
            $table->string('tempat', 200)->nullable();
            $table->string('pembuat_akta', 200)->nullable();
            $table->string('npwp', 30)->nullable();
            $table->text('alamat');
            $table->string('kelurahan_desa', 200)->nullable();
            $table->string('kecamatan', 200)->nullable();
            $table->string('kabupaten_kota', 200)->nullable();
            $table->string('provinsi', 200)->nullable();
            $table->string('kode_pos', 200)->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('no_tlp', 20)->nullable();
            $table->string('no_fax', 20)->nullable();
            $table->string('website', 200)->nullable();
            $table->text('catatan');
            $table->enum('status_koperasi', ['1. Aktif', '2. Tidak Aktif'])->nullable();
            $table->enum('koperasi_skala_besar', ['1. Ya', '2. Tidak'])->nullable();
            $table->enum('kelompok', ['Koperasi Pertanian', 'Koperasi Karyawan', 'Koperasi Simpan Pinjam', 'Koperasi Setba Usaha'])->nullable();
            $table->enum('sektor_usaha', ['Pertanian, Kehutanan dan Perikanan', 'Jasa Keuangan dan Asuransi', 'Pengadaan Air', 'Pengolahan Sampah, Limbah dan Daur Ulang', 'Jasa Lainnya'])->nullable();
            $table->enum('bentuk', ['Primer Nasional', 'Primer Provinsi', 'Primer Kab/Kota', 'Sekunder Kab/Kota'])->nullable();
            $table->enum('jenis', ['Komsumen', 'Pemasaran', 'Jasa', 'Produsen', 'Simpan Pinjam'])->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('isakif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koperasis');
    }
}
