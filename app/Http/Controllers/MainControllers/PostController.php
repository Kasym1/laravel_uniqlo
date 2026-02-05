<?php

namespace App\Http\Controllers\MainControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{
    #[NoReturn]
    public function instagram()
    {
        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }


    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd('deleted');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'please subscribe',
            'content' => 'legenda',
            'image' => 'image.jpg',
            'likes' => 222,
            'is_published' => 222,
        ];

        $post = Post::firstOrCreate([
            'title' => 'no subscribe',
        ],
            [
                'title' => 'no subscribe',
                'content' => 'legenda',
                'image' => 'image.jpg',
                'likes' => 222,
                'is_published' => 222,
            ]);
        dump($post->toArray());
        dd('finished');
    }
}
