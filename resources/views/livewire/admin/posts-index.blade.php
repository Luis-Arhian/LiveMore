<div class="card">

    <div class="card-header">
        <input type="text" class="form-control" placeholder="¿Que post desea buscar?" wire:model="buscador">
    </div>

    @if ($postUser->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Titulo</th>
                        <th colspan="2">  </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($postUser as $post)
                        <tr>
                            <td> {{$post->id}}</td>
                            <td> {{$post->title}}</td>
                            <td width="16px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}"> Editar </a>
                            </td>
                            <td width="16px">
                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    @else
        <div class="card-body">
            <h4> No existe ningun post con estas caracteristicas. </h4>
        </div>
    @endif

    <div class="card-footer">
        {{$postUser->links()}}
    <div>
</div>
