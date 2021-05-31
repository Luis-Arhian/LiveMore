<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validamos los valores a introducir y al crear la categoria redirigimos a la vista editar para que el admin pueda introducir datos relevantes.
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:categories'
            ]);

        $categoria = Category::create($request->all());

        // Obtener imagenes subidas por el admin.
        if($request->file('file')){
            $url = Storage::put('/public/posts_images', $request->file('file'));

            $categoria->images()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.categories.edit', $categoria)
            ->with('info', 'Se ha creado la categoria correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Validamos los valores a introducir y al crear la categoria redirigimos a la vista editar para que el admin pueda introducir datos relevantes.
        $request->validate([
            'title' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);

        $category->update(($request->all()));

        if ($request->file('file')){
            $url = Storage::put('categories', $request->file('file'));

            if($category->images){
                Storage::delete($category->images->url);

                $category->images->update([
                    'url' => $url
                ]);
            } else{
                $category->images()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('admin.categories.edit', $category)
        ->with('info', 'Se ha actualizado la categoria correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('info', 'Se ha eliminado la categoria correctamente.');
    }

    // Indicamos a Laravel que queremos que muestre el slug en lugar del id en la URL.
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
