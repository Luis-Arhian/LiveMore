<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Solamente podrá publicar post el usuario autentificado.
        if($this->user_id == auth()->user()->id){
            return true;
        } else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $post = $this->route()->parameter('post');

        $regla = [
            'slug' => 'required|unique:posts',
            'status' => 'required|in:0,1'
        ];

        if ($this->status==1){
            $regla = array_merge($regla, [
                    'title' => 'required',
                    'brief' => 'required',
                    'content' => 'required',
                    'category_id'=> 'required'
                ]);
        }

        if ($post){
            $rules['slug'] = 'required|unique:posts,slug,'. $post->id;
        }

        return $regla;
    }
}
