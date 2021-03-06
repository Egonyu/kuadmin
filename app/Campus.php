<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = [
        'name', 'location', 'description', 'country', 'campus-image'
    ];
}
