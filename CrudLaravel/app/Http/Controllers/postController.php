<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class postController extends Controller
{
    //
    public function getPosts(){
        $posts = post::all();
        dd($posts);
    }
}
