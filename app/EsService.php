<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsService extends Model
{
    protected $table = "es_services";
    
    protected $fillable = [ 'service_id','es_id','isavailable' ];


       public function estate()
    {
        return $this->belongsTo(EState::class);
    }
}
