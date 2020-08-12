<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->input('search');

        $posts = Post::select('a.id','a.title','a.content','a.created_at','b.name as author') 
                        ->from('posts as a')
                       ->join('users as b','a.user_id','=','b.id')
                       ->where('a.title','like',"%$search%")
                       ->orderBy('a.created_at','desc')
                       ->paginate(5);

        return view('blog.posts', compact('posts'));
    }
}
