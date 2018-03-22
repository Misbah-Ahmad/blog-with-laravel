<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use Carbon\Carbon;

class Post extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [

            "title" => $this->title,

            "body" => $this->body,

            "tags" => $this->tags()->pluck('name')

        ];
    }
}
