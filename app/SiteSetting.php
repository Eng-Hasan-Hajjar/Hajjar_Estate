<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    
    protected $table = "sitesettings";
    protected $fillable = [ 'slug','namesetting','value','type'];
}
