<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PoiUser;
use App\Http\Resources\PoiUser as PoiUserResource;

class PoiUserController extends Controller
{
    //
    public function attempt_login (Request $request) {
        // Get user
        $user = PoiUser::where([
            ['username', '=', $request->userName],
            ['password', '=', $request->password]
            ])->first();

        if($user) {
            return ['success' => TRUE,
                    'user_data' => [
                        'id' => $user['id'],
                        'username' => $user['username']
                    ]];
        }
        else {
            return ['success'=> FALSE,
                    'error_message' => 'Wrong username or password'];
        }
    }
}
