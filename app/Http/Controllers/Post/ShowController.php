<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        // приводим дату к удобочитаемому виду с помощью класса Carbon
        $date = Carbon::parse($post->created_at);

        // получаем 3 связанных поста, из которых исключаем пост с нашим id
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);
        return view('post.show', compact('post', 'date', 'relatedPosts'));
    }
}
