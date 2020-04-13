<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoiUser extends Model
{
    /**
     * By default laravel will expect 
     * created_at & updated_at column in a table
    */
    public $timestamps = false;

    public function testResults() {
        $poiUser = factory(PoiUserFactory::class)->make();
    }
}
