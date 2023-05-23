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
        Schema::create('rfe_columns', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->foreignId('rfe_category_id');
            $table->string('name', 255)->comment('nama kolom harus sama dgn tabel yg akan dipakai. mis: utk kategori basic_information value ktp mengambil dari field ktp dari tabel pim_people');
            $table->enum('is_mandatory', ['N', 'Y']);
            $table->string('table_ref', 255)->comment('nama tabel sbg ref kolom yg akan dipakai. mis: utk nama kolom ktp merefer ke kolom ktp di pim_people');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfe_columns');
    }
};
