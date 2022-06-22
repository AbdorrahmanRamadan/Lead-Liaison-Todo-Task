<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "created_at" => $this->created_at->format('Y-M-d h:m:s'),
            "updated_at" => $this->updated_at->format('Y-M-d h:m:s'),
        ];
    }
}
