<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunProduksi extends Model
{
    protected $table 	= 'tahun_produksis';

    protected $fillable = [
    	'tahun_produksi'
    ];
}
