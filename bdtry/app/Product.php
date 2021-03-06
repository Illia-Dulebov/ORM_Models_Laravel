<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';
    public $timestamps = false;
    public function products(){
        return $this->hasMany('App\Category');
    }
}
