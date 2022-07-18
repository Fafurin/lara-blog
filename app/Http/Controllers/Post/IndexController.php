<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);

        // выводим 4 рандомных поста
        $randomPosts = Post::get()->random(4);

        // выводим 4 поста по наибольшему количеству лайков
        $popularPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('post.index', compact('posts', 'randomPosts', 'popularPosts'));
    }
}
