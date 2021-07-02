<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Model\User\post', 'tag_posts');
    }
}
