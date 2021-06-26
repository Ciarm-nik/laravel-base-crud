<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'thumb', 'price','series', 'sale_date','type'
    ];
}
