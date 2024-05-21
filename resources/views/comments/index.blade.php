<x-app-layout>
<div class="card">
    <div class="card-body">
           {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME USER</th>
                    <th>Comentario</th>
                    <th>Hora de creación</th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>

            <tbody>
                
                @foreach ($comments as $comment)
                    <tr>
                        <td> {{$comment->id }} </td>
                        <td>{{$comment->user->name }} </td>
                        <td>{{$comment->mensaje }} </td>
                        <td>{{$comment->created_at->diffForHumans() }} </td>
                        {{-- <td with="10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $comment) }}"> EDITAR</a>
                        </td>
                        <td with="10px">
                            <form action="{{ route('admin.posts.destroy', $comment) }}" method="POST">
                                @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit"> ELIMINAR</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-app-layout>