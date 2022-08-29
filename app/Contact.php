<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $fillable = ['contact_name', 'contact_email', 'contact_subject', 'contact_message', 'view', 'contact_type'];
}
