<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\Resource;

class UserPreProjectAnalysisResource extends Resource
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
            'attributes' => [
                'user_name' => $this->resource->user->name,
                'work_time' => round($this->resource->sum_time),
                'work_cost' => (int)$this->resource->sum_cost,
                'work_cost_with_format' => number_format($this->resource->sum_cost),
            ],
            'relationships' => null,
            'links' => [
                'self' => null,
            ]
        ];
    }
}
