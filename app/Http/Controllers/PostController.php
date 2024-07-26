<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index() {
        $post = Post::get();
        return view('posts.index', ["posts"=>$post]);
    }

    public function show(Post $post) {
        return view('posts.show', [ 'post' => $post ]);
        //$postx = Post::findOrFail($post);
    }

    public function create() {
        return view('posts.create', [ 'post' => new Post() ]);
    }

    public function store(SavePostRequest $request) {
        /* $validated = $request->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required']
        ],[
            'title.required' => 'La descripción es necesaria para realzar la fiabilidad de la publicación'
        ]); */

        $status = Post::create($request->validated());

        $message = $status ? 'Publicación realizada con éxito' : 'Ocurrió un error al publicar';
        
        // session()->flash('status', $message);

        return to_route('posts.index')->with('status', $message);
        // return redirect()->route('posts.index');
    }

    public function edit(Post $post) {
        return view('posts.edit', [ 'post' => $post ]);
    }

    public function update(SavePostRequest $request, Post $post ) {
        /* $validated = $request->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required']
        ]); */

        /* $post->title = $request->input('title');
        $post->description = $request->input('description');
        $status = $post->save(); */

        $status = $post->update($request->validated());

        $message = $status ? 'Publicación actualizada con éxito!' : 'Ocurrió un error al actualizar la publicación!';
        //session()->flash('status', $message);

        return to_route('posts.show', $post)->with('status', $message);
    }

    public function destroy(Post $post) {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post Eliminado correctamente!');
    }
    
}
