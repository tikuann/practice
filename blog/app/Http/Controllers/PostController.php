<?php

namespace App\Http\Controllers;

use App\Providers\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(Post $post)
{
    return $post->get();
}
}
