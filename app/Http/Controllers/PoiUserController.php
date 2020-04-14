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
            /* Set the authData session array if it does not exist */
            $userSessions = $request->session()->get('authData');
            if(!$userSessions) {
                $request->session()->put('authData', []);
            }

            $request->session()->put('authData.userId', $user['id']);
            $request->session()->put('authData.isAdmin', $user['isadmin']);

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

    public function logout(Request $request) {
        $request->session()->forget('authData');

        return['success'=> TRUE,
               'response_message'=> 'You\'re now logged out of the system'];
    }
}
