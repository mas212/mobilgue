<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $table = 'subkategoris';

    protected $fillable = [
    	'nama',
    	'kategori_id'
    ];

    public function kategori(){
    	return $this->belongsTo('App\Kategori', 'kategori_id');
    }
}
