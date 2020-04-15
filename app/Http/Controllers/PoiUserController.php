<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PoiUser;
use App\Http\Resources\PoiUser as PoiUserResource;

class PoiUserController extends Controller
{
    //
    public function attemptLogin (Request $request) {
        // Get user
        $user = PoiUser::where([
            ['username', '=', $request->userName],
            ['password', '=', $request->password]
            ])->first();

        if($user) {
            $token = auth()->login($user);

            return ['success' => TRUE,
                    'user_data' => [
                    'id' => $user['id'],
                    'username' => $user['username']],
                    'security_token' => PoiUser::getTokenData($token)
                ];
        }
        else {
            return ['success'=> FALSE,
                    'error_message' => 'Wrong username or password'];
        }
    }

    public function logout(Request $request) {
        auth()->logout();

        return['success'=> TRUE,
               'response_message'=> 'You\'re now logged out of the system'];
    }

    public function getAuthData(Request $request) {
        $token = $request->query('token');

        $user = auth()->authenticate();
        $authData = ['id' => $user['id'],
                    'username' => $user['username']];

        return $authData;
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 60
        ]);
    }
}
