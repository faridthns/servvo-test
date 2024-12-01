<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $fillable = [
        'id',
        'location',
        'createdAt',
        'created',
        'status',
        'nama_perusahaan',
        'alamat',
        'phone',
        'email',
        'idProvince',
        'idRegencies',
    ];
}
