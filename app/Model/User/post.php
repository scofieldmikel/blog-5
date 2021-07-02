<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags(){
    
        return $this->belongsToMany('App\Model\User\tag', 'tag_posts')->withTimestamps();
    }

    public function categories(){
        
        return $this->belongsToMany('App\Model\User\category', 'category_posts')->withTimestamps();
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
