<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoiReview extends Model
{
    /**
     * By default laravel will expect 
     * created_at & updated_at column in a table
    */
    public $timestamps = false;
}
