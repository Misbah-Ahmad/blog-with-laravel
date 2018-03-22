<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use App\Http\Resources\Post;

use App\Http\Resources\PostCollection;

class User extends Resource
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

            "name" => $this->name,

            "email" => $this->email,
        
            "gender" => $this->gender,

            "registered" => $this->created_at

        ];
    }
}
