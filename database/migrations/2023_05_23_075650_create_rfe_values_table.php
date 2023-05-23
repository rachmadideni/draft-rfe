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
        Schema::create('rfe_values', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->foreignId('rfe_column_id');
            $table->string('old_value', 255)->nullable();
            $table->string('new_value', 255)->nullable();
            $table->bigInteger('requested_by');
            $table->dateTime('requested_date');
            $table->bigInteger('approved_by')->nullable();
            $table->dateTime('approved_date')->nullable();
            $table->enum('rejected', ['Y', 'N'])->default('N');
            $table->bigInteger('rejected_by')->nullable();
            $table->text('rejected_reason')->nullable();
            $table->foreignId('statuses')->nullable();
            $table->enum('changes_type', ['add','edit','delete']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfe_values');
    }
};
