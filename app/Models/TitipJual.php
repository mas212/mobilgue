<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TitipJual extends Model
{
    protected $table = 'titip_juals';

    protected $fillable = [
    	'merek_id',
    	'subkategori_id',
    	'tahun_id',
    	'transmisi_id',
    	'lokasi',
    	'nomor_telpn'
    ];

    public function merek(){
    	return $this->belongsTo('App\Merk', 'merek_id');
    }

    public function subKategori(){
    	return $this->belongsTo('App\Subkategori', 'subkategori_id');
    }

    public function tahun(){
    	return $this->belongsTo('App\TahunProduksi', 'tahun_id');
    }

    public function transmisi(){
    	return $this->belongsTo('App\Models\Transmisi', 'transmisi_id');
    }
}
