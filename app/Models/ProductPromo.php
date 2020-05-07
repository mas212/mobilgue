<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPromo extends Model
{
    protected $table = 'product_promos';

    protected $fillable = [
    	'nama',
    	'harga',
    	'ringkasan',
    	'photo',
    	'deskripsi',
    	'promo_persentase'
    ];
}
