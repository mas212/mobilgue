<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';

    protected $fillable = [
    	'product_id',
    	'photo_1',
    	'photo_2',
    	'photo_3'
    ];

    public function product(){
    	return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
