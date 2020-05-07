<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTitipJual extends Model
{
    protected $table = 'detail_titip_juals';

    protected $fillable = [
    	'jam_pertemuan',
    	'nama_lengkap',
    	'email',
    	'alamat_lengkap',
    	'pemilik_kendaraan',
    	'iklan',
    	'titip_id',
        'user_id'
    ];

    public function titip_jual(){
    	return $this->belongsTo('App\Models\TitipJual', 'titip_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
