<?php

namespace App;

use App\User;

use App\Tag;

class Post extends Model
{
    

    public function storeTags($tags)
    {

    	foreach ($tags as $id) {	

    		//$tag  = Tag::find($id);

    		$this->tags()->attach($id);
    	
    	}

    }
    

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }


    public function user()
    {

        return $this->belongsTo(User::class);
    
    }
    

    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }




    public function getBodyShortAttribute()
    {

        return substr($this->body, 0, 300);

    }

    public function getTitleAttribute($value)
    {

        return ucfirst($value);

    }


}
