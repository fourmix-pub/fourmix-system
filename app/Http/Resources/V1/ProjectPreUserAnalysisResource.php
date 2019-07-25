<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\Resource;

class ProjectPreUserAnalysisResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'attributes' => $this->resource->attributes(),
            'relationships' => [
                'user' => ''
            ],
            'links' => [
                'self' => null,
            ]
        ];
    }
}
