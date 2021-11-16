<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;

class PostController extends Controller
{

public function index(Post $post)
{
    return view('index');
}

public function show(Post $post)
{
    return view('show')->with(['post' => $post]);
        
}

public function list(Post $post)
{
    return view('list')->with(['posts' => $post->getPaginateByLimit()]);
}
public function create(Post $post, Category $category)
{
    dd($category->get());
    return view('create')->with(["categorys" => $category->get()]);
}

public function store(Post $post, PostRequest $request)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}
public function edit(Post $post)
{
    return view('edit')->with(['post' => $post]);
}
public function update(PostRequest $request, Post $post)
{
    $input_recipe = $request['post'];
    $recipe->fill($input_recipe)->save();

    return redirect('/post/' . $post->id);
}
public function delete(Post $post)
{
    $post->delete();
    return redirect('/');
}
}


