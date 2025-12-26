<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{
    #[NoReturn]
    public function instagram()
    {
        $post = Post::all();
        dump($post);
    }

    public function create()
    {
        $postsArr = [
            [
                'title ' => 'title of post from phpstorm',
                'content ' => 'some interesting content',
                'image ' => 'image.jpg',
                'likes ' => 20,
                'is_published ' => 1,
            ],
            [
                'title ' => 'title of post from phpstorm',
                'content ' => 'some interesting content',
                'image ' => 'image.jpg',
                'likes ' => 20,
                'is_published ' => 1,
            ],
        ];

        foreach ($postsArr as $item) {
            Post::create($item);

        }
        dd('created');
    }

    public function update()
    {
        $post = Post::find(3);
//        dd($post->toArray());

        $post->title = 'hello';
        $post->save();

//        dd($post);

        $post->update([
            'title' => 'hello',
        ]);


        dd('hello', $post->toArray());
    }
}
