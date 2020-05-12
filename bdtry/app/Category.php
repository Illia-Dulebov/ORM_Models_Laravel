<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = 'categories';
    public $timestamps = false;
    public function pod(){
        return $this->belongsToMany('App\Product');;
    }
    public function products(){
        return $this->hasMany('App\Product');
    }
}
