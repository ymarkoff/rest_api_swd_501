<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointOfInterest extends Model
{
    protected $table = 'pointsofinterest';

    /**
     * By default laravel will expect 
     * created_at & updated_at column in a table
    */
    public $timestamps = false;

    //
}
