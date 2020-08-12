<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::get();
        return view('admin.post.list', compact('posts'));
    }


    public function create() 
    {
      return view('admin.post.create');  
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = Auth::id();

        if($post->save()){
            die('Cadastrado com sucesso');
        }

    }


    public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        $post = Post::find($request->input('id'));

        $post->title = $request->input('title');
        $post->content = $request->input('content');

        if($post->save())
        {
            return back()->with([
                'alert' => 'success',
                'message'=> 'Post atualizado com sucesso'
            ]);  
        }
    }


    public function destroy($postId)
    {

        $post = post::find($postId);

        if($post->delete())
        {
            return back()->with(['alert' => 'danger', 
                                  'message' => 'Exclusão realizada com sucesso']);
        }

        
    }

}
