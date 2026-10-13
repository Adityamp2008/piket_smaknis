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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();

            //data guru piket
            $table->string('nama_guru');
            $table->date('tgl_lahir');
            $table->enum('jns_klmn', ['L','P']);
            $table->string('nip');
            $table->string('no_telp');
            $table->string('alamat');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
