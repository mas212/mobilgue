<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
    	'nama',
    	'harga',
    	'ringkasan',
    	'photo',
    	'deskripsi',
    	'kategori_id',
        'subcat_id',
        'tahun',
        'merek',
        'jarak',
        'transmisi_id',
        'status_jual',
        'warna'
    ];

    public function kategori(){
    	return $this->belongsTo('App\Kategori', 'kategori_id');
    }


    public function subkategori(){
        return $this->belongsTo('App\Subkategori', 'subcat_id');
    }

    public function tranmisi(){
        return $this->belongsTo('App\Models\Transmisi', 'transmisi_id');
    }
}
