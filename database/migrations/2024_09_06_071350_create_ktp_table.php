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
        Schema::create('ktp', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();  
            $table->string('nama', 100);          
            $table->string('tempat_lahir', 50);   
            $table->date('tanggal_lahir');        
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->string('alamat');             
            $table->string('rt_rw', 10);          
            $table->foreignId('id_kelurahan')->constrained('kelurahan'); 
            $table->foreignId('id_kecamatan')->constrained('kecamatan'); 
            $table->string('agama', 20);          
            $table->string('status_perkawinan', 20); 
            $table->string('pekerjaan', 50);      
            $table->string('kewarganegaraan', 3); 
            $table->string('berlaku_hingga', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp');
    }
};
