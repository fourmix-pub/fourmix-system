<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
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
                'department' => new DepartmentResource($this->department)
            ],
            'links' => [
                'self' => null,
            ],
        ];
    }
}
