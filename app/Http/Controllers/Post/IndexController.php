<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use JetBrains\PhpStorm\NoReturn;

class IndexController extends Controller
{
public function __invoke()
{
    $posts = Post::paginate(10);
    return view('post.index', compact('posts'));}
}
