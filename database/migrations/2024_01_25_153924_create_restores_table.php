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
        Schema::create('restore', function (Blueprint $table) {
            $table->id('id_restore');
            $table->string('periode');
            $table->date('tanggal');
            $table->string('objek');
            $table->string('Status');
            $table->string('pj');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restore');
    }
};
