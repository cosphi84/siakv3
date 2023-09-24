<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(
            'users',
            function (Blueprint $table) {
                $table->string('username', 100)->index('idx_username');
                $table->string('no_ktp', 20)->nullable();
                $table->string('pob', 100)->nullable();
                $table->date('dob')->nullable();
                $table->enum('jenis_kelamin', array('L', 'P'))->nullable();
                $table->enum('status_sipil', array('Menikah', 'Sendiri'))->nullable();
                $table->string('agama', 50)->nullable();
                $table->string('alamat', 400)->nullable();
                $table->string('kelurahan', 100)->nullable();
                $table->string('kecamatan', 100)->nullable();
                $table->string('kabupaten', 100)->nullable();
                $table->string('propinsi', 100)->nullable();
                $table->string('kewarganegaraan', 100)->nullable()->default('Indonesia');
                $table->string('kode_pos', 10)->nullable()->default('00000');
                $table->string('hp1', 20)->nullable();
                $table->string('hp2', 20)->nullable();
                $table->date('join_date')->nullable();
                $table->date('left_date')->nullable();
                $table->tinyInteger('status')->default(1);
                $table->tinyInteger('department_id')->default(0);
                $table->boolean('jenis_user')->default(0);
                $table->string('nip', 30)->nullable();
                $table->string('nidn', 30)->nullable();
                $table->tinyInteger('start_semester', false, true)->nullable();
                $table->tinyInteger('start_tahun', false, true)->nullable();
                $table->enum('jenis_mahasiswa', ['Reguler', 'Pindahan'])->nullable();
                $table->tinyInteger('kelas_mahasiswa', false, true)->nullable();
                $table->string('role')->default('mahasiswa');
                $table->string('foto', 255)->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('no_ktp');
            $table->dropColumn('pob');
            $table->dropColumn('dob');
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('status_sipil');
            $table->dropColumn('agama');
            $table->dropColumn('alamat');
            $table->dropColumn('kelurahan');
            $table->dropColumn('kecamatan');
            $table->dropColumn('kabupaten');
            $table->dropColumn('propinsi');
            $table->dropColumn('kewarganegaraan');
            $table->dropColumn('kode_pos');
            $table->dropColumn('hp1');
            $table->dropColumn('hp2');
            $table->dropColumn('join_date');
            $table->dropColumn('left_date');
            $table->dropColumn('status');
            $table->dropColumn('department_id');
            $table->dropColumn('jenis_user');
            $table->dropColumn('nip');
            $table->dropColumn('nidn');
            $table->dropColumn('start_semester');
            $table->dropColumn('start_tahun');
            $table->dropColumn('jenis_mahasiswa');
            $table->dropColumn('kelas_mahasiswa');
            $table->dropColumn('role');
            $table->dropColumn('foto');
        });
    }
};
