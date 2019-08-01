<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\Resource;

class WorkTypePreUserAnalysisResource extends Resource
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
                'work_type' => $this->resource->workType->name,
                'work_time' => $this->resource->sum_time,
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
