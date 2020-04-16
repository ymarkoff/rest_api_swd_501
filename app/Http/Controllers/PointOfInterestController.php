<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PointOfInterest;
use App\Http\Resources\PointOfInterest as PointOfInterestResource;

class PointOfInterestController extends Controller
{
    //
    public function createPoint(Request $request) {
        $user = auth()->authenticate();
        if ($user) {
            $point = new PointOfInterest();

            $pointData = $request->input('point_data');

            $point->name = $pointData['name'];
            $point->type = $pointData['type'];
            $point->country = $pointData['country'];
            $point->region = $pointData['region'];
            $point->description = $pointData['description'];
            $point->recommended = 0;

            $point->save();

            return [
                'success'  => TRUE,
                'response_message'   => 'Point added successfuly!'
            ];
        }
        else {
            return [
                'success'  => TRUE,
                'response_message'   => 'You must authenticate first!'
            ];
        }
    }
}
