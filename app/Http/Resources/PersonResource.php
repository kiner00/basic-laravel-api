<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /**
         * If you want to show all data
         */
        return parent::toArray($request);

        /**
         * Specific array to show
         */
        // return [
        //     'first_name' => $this->first_name,
        //     'last_name' => $this->last_name,
        // ];
    }
}
