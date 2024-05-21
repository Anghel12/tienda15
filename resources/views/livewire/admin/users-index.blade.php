<div>
    <h4>Total de Usuarios {{$users->count()}} </h4>
   livewire users

   {{-- Buscardor de usuarios livewire  wire:model="search"--}}
 {{--   <div class="card-header">
    <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del Post">
</div> --}}

{{-- lista de usuarios el if en caso no se encuentre ningun usuario --}}

{{-- @if ($users->count()) --}}
    <div class="card">
        <div class="card-body">

            {{-- SE ESTA UTILIZANDO DATATABLES PLUGIN PARA BUSCAR, PAGINAR Y MAS COSAS EN TABLE ID=MYTABLE--}}
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th> 
                        <th>Admin</th>
                        <th>Incorporacion</th>
                        <th>Actualizacion</th>
                        <th colspan=""></th>
                        <th colspan=""></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>  
                                <a href="{{ route('admin.users.show', $user) }}">         
                                 <div class="shrink-0 mr-3">
                             
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" style="border-radius: 50%; width: 50px; height: 50x;"/>
                                 </div>
                                </a> 
                                {{$user->id }}   
                            </td>
                            <td>{{$user->name }} </td>
                            <td>{{$user->email }} </td>

                            <td>
                                @if ($user->hasRole('Admin'))
                                    <span class="badge bg-primary">Administrador</span>
                                @else

                                <span class="badge bg-success">Usuario</span>

                                @endif
                            </td>
                            <td>{{$user->created_at->diffForHumans() }} </td>
                            <td>{{$user->updated_at->diffForHumans() }} </td>
                            
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}"> EDITAR</a>
                            </td>
                            <td>
                                <!-- Aquí se encuentra el botón "Mirar" -->
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.users.show', $user) }}">Mirar</a>
                            </td>
                           {{--  <td with="10px">
                                <form action="{{ route('admin.users.edit', $user) }}" method="POST">
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

 {{--  <div class="card-footer">
        {{$users->links()}}
    </div> --}}
  {{--   @else
    <div class="card-body">
        <strong> NO HAY POSTS RELACIONADOS</strong>
    </div>
    
    @endif  --}}

</div>
