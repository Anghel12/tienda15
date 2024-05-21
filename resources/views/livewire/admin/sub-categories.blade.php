
    <div class="card-minimalista">
        <div class="card-body">
            <p>TODAS LAS SUB CATEGORIAS</p>

               {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
            <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CREADOR</th>
                    <th>Categoria relacionada</th>
                    <th>Post Relacionado:</th>
                    <th>NAME</th>
                    <th>Hora de creación</th>
                    <th>Hora de actualizacion</th>
                    <th colspan=""></th>
                    <th colspan=""></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($sub_categories as $sub_category)
              

                
                <tr>
                    <td> {{$sub_category->id}} </td>
                    <td> {{$sub_category->user->name}} </td>
                    <td> {{$sub_category->category->name}} </td>
                  {{--    crea relacion
                    <td> {{$sub_category->posts->count()}} </td> --}}
                    <td> {{$sub_category->title}} </td>
                    <td>{{$sub_category->created_at->diffForHumans() }} </td>
                    <td>{{$sub_category->updated_at->diffForHumans() }} </td>

                    <td width="10px" >
                        
                        @can('admin.categories.edit')
                          <a class="btn btn-primary btn-sm" href=" {{route('admin.sub_categories.edit', $sub_category)}} ">EDITAR</a>
                        @endcan
                       
                    </td>

                    <td width="10px" >

                        @can('admin.categories.destroy')
                        <form action="{{route('admin.categories.destroy', $sub_category)}}" method="POST">
                            @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm"> ELIMINAR</button>
                        </form>
                        @endcan
                        
                    </td>
                </tr>
          
                @endforeach
               
            </tbody>
        </table>


        </div>
    </div>
