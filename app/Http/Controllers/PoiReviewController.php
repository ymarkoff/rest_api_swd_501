<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PoiReview;

class PoiReviewController extends Controller
{

    public function getPointReviews(Request $request) {
        $user = auth()->authenticate();
        if($user) {
            $pointID = $request->route()->parameters('pointID');
            $reviews = PoiReview::where('poi_id', '=', $pointID)->orderbyDesc('id')->get();

            return $reviews;
        }
    }

    public function createReview(Request $request) {
        $user = auth()->authenticate();
        if($user) {
            $review = new PoiReview();

            $reviewData = $request->input('review_data');

            $review->review = $reviewData['review'];
            $review->poi_id = $reviewData['poi_id'];

            $review->save();

            return [
                'success'  => TRUE,
                'response_message'   => 'Review added successfuly!'
            ];
        }
    }
}
