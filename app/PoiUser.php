<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;


class PoiUser extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * By default laravel will expect 
     * created_at & updated_at column in a table
    */
    public $timestamps = false;

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    protected static function getTokenData($token) {
        return [
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ];
    }

    public function testResults() {
        $poiUser = factory(PoiUserFactory::class)->make();
    }
}
