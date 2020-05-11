<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
    	'nama'
    ];

    public function scopeSort($query){
    	return $query->orderBy('created_at', 'DESC');
    }
}
