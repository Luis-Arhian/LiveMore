<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';

    use HasFactory;

    // Asignamos los parametros que podremos insertar en el modelo.
    protected $fillable = ['name', 'slug'];

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function images(){
        return $this->morphMany(Image::class, 'model');
    }

    // Indicamos a Laravel que queremos que muestre el slug en lugar del id en la URL.
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
