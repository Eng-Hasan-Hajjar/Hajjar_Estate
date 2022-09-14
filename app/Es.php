<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Es extends Model
{
    protected $table="es";
    
    protected $fillable=[
    	'es_name', 'es_price', 'es_rent', 'es_sequar', 'es_type', 'es_small_dis', 'es_meta', 'es_langtuide', 'es_latitude', 'es_larg_dis', 'es_status', 'user_id', 'es_rooms', 'es_place',
    	'es_image',
        
        'month','year' ,
    ];
    
    public function images(){
        return $this->belongsToMany(Image::class);
    }

    public function services(){
        return $this->belongsToMany(EsService::class);
    }
    public function evaluations(){
        return $this->belongsToMany(Evaluation::class);
    }
}
