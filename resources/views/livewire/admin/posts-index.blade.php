<div>
    @if ($posts->count()) 
    <div class="card-minimalista">
        <div class="card-body">
               {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>vistas</th>
                        <th>PRICE</th>
                        <th>TAGS</th>
                        <th>CATEGORIA</th>
                        <th>Hora de creación</th>
                        <th>Hora de actualizacion</th>
                        <th colspan=""></th>
                        <th colspan=""></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr class="listas1">
                            <td> {{$post->id }} </td>
                            <td>{{$post->name }} </td>
                            <td>{{$post->vistas }} </td>
                            <td>{{$post->price_reciente }} </td>
                            <td> {{$post->tags->count() }} </td>
                            <td>{{$post->category->name }} </td>
                            <td>{{$post->updated_at->diffForHumans() }} </td>
                            <td>{{$post->created_at->diffForHumans() }} </td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}"> EDITAR</a>
                            </td>
                            <td with="10px">
                                <form class="formulario-eliminar" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"> ELIMINAR</button>
                                </form>
                            {{--     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">view @mdo</button>
                            --}}

                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer">
        {{$posts->links()}}
    </div>
    @else
    <div class="card-body">
        <strong> NO HAY POSTS RELACIONADOS</strong>
    </div>
    
    @endif


</div>




