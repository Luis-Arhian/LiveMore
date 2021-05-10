<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    // Le indicamos que vamos a utilizar la paginación.
    use WithPagination;

    // Variable que utilizaremos para realizar un buscador con livewire.
    public $buscador = 'hola';

    // Cada vez que el campo buscador cambie se resetea la paginación.
    public function actualizandoBuscador(){
        $this->resetPage();
    }

    public function render()
    {
        $postUser = Post::where('user_id', auth()->user()->id)
        ->where('title', 'LIKE', '%' . $this->buscador .'%')
        ->latest()
        ->paginate();

        return view('livewire.admin.posts-index', compact('postUser'));
    }
}
