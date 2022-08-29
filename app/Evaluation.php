<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    public function estate()
    {
        return $this->belongsTo(Es::class);
    }
}
