<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($id)
    {
        $posts = collect([
            1 => 'текст 1',
            'текст 2',
            'текст 3',
            'текст 4',
            'текст 5',
            'текст 6',
            'текст 7',
            'текст 8',
        ]);

        $posts = $posts->concat(['текст 9']);


        return (isset($posts[$id])) ? $posts[$id] : 'Неизвестный id';
    }

    public function all()
    {
        $posts = DB::table('posts')->get();

        return view('post.all', compact('posts'));
    }
} 
