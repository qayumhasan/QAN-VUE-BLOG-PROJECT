<?php

namespace App\Http\Resources\Website;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResoureCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'cat_name'=>$this->cat_name,
            'posts'=>PostCollection::collection($this->whenLoaded('categorys')),
        ];
    }
}
