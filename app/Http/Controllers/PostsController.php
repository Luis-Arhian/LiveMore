<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // Seleccionar todas las categorias disponibles.
        $categorias = Category::all();

        // Obtener los post con status 1, es decir, los que se encuentran publicados.
        $posts_publicados = Post::SELECT('*')
                            ->where('status', 1)
                            //->where('category_id', $categorias->id)
                            ->orderBy('id', 'desc')
                            //->take(4)
                            ->get();

        // Devolvemos la vista pero pasando los resultados obtenidos anteriormente.
        return view('blog', compact('posts_publicados', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post_similares = Post::where('category_id', $post->category_id)
                        ->where('status', 1)
                        ->where('id', '!=', $post->id)
                        ->latest('id')
                        ->take(3)
                        ->get();

        $comments = Comment::where('post_id', $post->id)->get();
        return view('Blog.show', compact ('post', 'post_similares', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showCategory(Category $categoria){
        $postCategoria = Post::where('category_id', $categoria->id)
                    ->where('status', 1)
                    ->latest('id')
                    ->get();

        return view('blog.postCategoria', compact('categoria', 'postCategoria'));
    }

    public function everyCategory(Category $categoria){
        $categorias = Category::all();
        return view('blog.categorias', compact('categorias'));
    }
}
