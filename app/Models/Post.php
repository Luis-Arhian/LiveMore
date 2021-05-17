<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'Posts';

    // Evito la asignación másiva en los siguientes campos.
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->morphOne(Image::class, 'model');
    }

    public function mainImage(){
        return $this::first();
    }
}
