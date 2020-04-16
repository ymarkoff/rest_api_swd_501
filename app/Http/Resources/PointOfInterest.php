<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PointOfInterest extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        return [
            'name' => $this->username,
            'type' => $this->password,
            'country' => $this->country,
            'region' => $this->region,
            'description' => $this->description
        ];
    }
}
