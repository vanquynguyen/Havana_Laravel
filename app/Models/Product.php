<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
    protected $appends = ['full_name'];


    public function product(){
    	return $this->belongsToMany('App\Models\Categories');
    }

    public function getFullNameAttribute()
    {
        return "Dang Minh Truong";
    }
}
