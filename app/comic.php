<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{

    protected $fillable = [
        'id', 'title', 'description', 'thumb', 'price','series', 'sale_date','type'
    ];
}
