<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Model\User\post;

class UserController extends Controller
{
    public function post(post $post) {
       
        return view('user.post', compact('post'));
    }
}
