<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\Resource;

class DailyResource extends Resource
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
                'user' => new UserResource($this->user),
                'work_type' => new WorkTypeResource($this->workType),
                'job_type' => new JobTypeResource($this->jobType),
                'project' => new ProjectResource($this->project),
            ],
            'links' => [
                'self' => null,
            ]
        ];
    }
}
