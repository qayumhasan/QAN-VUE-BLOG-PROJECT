<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'title' => $this->title,
            'details'=>$this->details,
            'category'=>CategoryCollection::collection($this->whenLoaded('categorys')),
            'photo'=>$this->photo,
        ];
    }
}
