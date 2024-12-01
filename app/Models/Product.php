<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Id',
        'IdCategoryProduct',
        'IdSubCategoryProduct',
        'CreateSn',
        'IdProduct',
        'Name',
        'PNO',
        'Price_lama',
        'Price',
        'Stock',
        'Description',
        'MinQty',
        'Weight',
        'Expired',
        'Warranty',
        'ExpiredSNI',
        'WarrantySNI',
        'CreatedDate',
        'created_at',
        'updated_at',
        'Status',
        'panjang',
        'lebar',
        'tinggi',
        'fire_rating',
        'media',
        'type',
        'kapasitas',
        'kelas_kebakaran',
        'tabung_silinder',
    ];
}
