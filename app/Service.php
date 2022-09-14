<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    
    protected $fillable = [ 'service_name' ];
    
//    public function estates()
//    {
//        return $this->belongsToMany(EStateService::class);
//    }

}
