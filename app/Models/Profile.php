<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table  = 'profiles';

    protected $fillable = [
    	'user_id',
    	'phone',
    	'wa',
    	'address',
    	'photo'
    ];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
