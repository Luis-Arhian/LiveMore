<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function getUrlPathAttribute(){
        return Storage::url($this->path);
    }
    public function model(){
        return $this->morphTo();
    }
}
