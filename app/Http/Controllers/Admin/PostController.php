<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::pluck('name', 'id');

        return view('admin.posts.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Validará las reglas utilizadas en StorePostRequest.
    public function store(PostRequest $request)
    {

        $post = Post::create($request -> all());

        // Obtener imagenes subidas por el admin.
        if($request->file('file')){
            $url = Storage::put('/public/posts_images', $request->file('file'));


            $post->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.index', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categorias = Category::pluck('name', 'id');

        return $post;
        //return view('admin.posts.edit', compact('post', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        if ($request->file('file')){
            $url = Storage::put('posts', $request->file('file'));

            if($post->images){
                Storage::delete($post->images->url);

                $post->images->update([
                    'url' => $url
                ]);
            } else{
                $post->images()->create([
                    'url' => $url
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

