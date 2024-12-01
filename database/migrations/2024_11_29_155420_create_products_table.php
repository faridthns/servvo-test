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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('IdCategoryProduct');
            $table->integer('IdSubCategoryProduct');
            $table->integer('CreateSn');
            $table->string('IdProduct');
            $table->string('Name');
            $table->string('PNO');
            $table->integer('Price_lama');
            $table->double('Price',19,2);
            $table->integer('Stock');
            $table->string('Description');
            $table->integer('MinQty');
            $table->float('Weight');
            $table->integer('Expired');
            $table->integer('Warranty');
            $table->integer('ExpiredSNI');
            $table->integer('WarrantySNI');
            $table->date('CreatedDate');
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->integer('Status');
            $table->float('panjang');
            $table->float('lebar');
            $table->float('tinggi');
            $table->string('fire_rating');
            $table->string('media');
            $table->string('type');
            $table->string('kapasitas');
            $table->string('kelas_kebakaran');
            $table->string('tabung_silinder');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
