<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'id', 'code','short_name', 'display_name','status'
    ];
}
