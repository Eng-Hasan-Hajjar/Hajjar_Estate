<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    
    protected $fillable = ['image','es_id'];
    
    public function estate(){
        return $this->belongsTo(\App\Es::class,'es','id');
    }
}
