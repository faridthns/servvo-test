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
        Schema::create('gudang', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->date('createdAt');
            $table->integer('created');
            $table->integer('status');
            $table->string('nama_perusahaan');
            $table->text('alamat');
            $table->string('phone');
            $table->string('email');
            $table->integer('idProvince');
            $table->integer('idRegencies');
        });
    }

};
