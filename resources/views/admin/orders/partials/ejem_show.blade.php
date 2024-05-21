<div class="card">
    <div class="container text-center">
        <div class="row ">
            <h2 class="">Nombre del comprador:</h2>
            <h2> {{$order->user->name}} </h2>


            {{-- ACCION --}}

            <div class="container text-center">
                <div class="row">
                    <div class="card col-sm-3 m-2 p-2">
                        <label for="name" class="">Pedidos: {{ $order->item_count}}</label>

                        <div class="card-footer">
                            <p class="btn btn-primary">{{ $order->order_number }}</p>

                        </div>
                    </div>
                    <div class="card col-sm-3 m-2 p-2">
                        <label for="name" class="">Estado orden</label>

                        <div class="card-footer">
                            <a class="btn btn-dark" href="#">{{ $order->status }}</a>
                        </div>
                    </div>
                    <div class="card col-sm-3 m-2 p-2">
                        <label for="name" class="">Total Pagado:</label>

                        <div class="card-footer">
                            <a class="btn btn-primary" href="#" role="button">{{ $order->payment_method }}: {{
                                $order->total }}</a>
                        </div>
                    </div>
                    <div class="card col-sm-2 m-2 p-2">
                        <label for="name" class="">ROL:</label>

                        <div class="card-footer">
                            @if ($order->user->hasRole('Admin'))
                            <span class="badge bg-primary">Administrador</span>
                            @else

                            <span class="badge bg-success">Usuario</span>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


{{-- tabla de ordenes realizadas --}}

<div class="card">
    <div class="card-header">
        <h2> Contactar:</h2>

    </div>
    <div class="">
        <table id="myTable1" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dirección de envío</th>
                    <th>Teléfono de envío</th>
                    <th>metodo Pago</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <tr>

                    <td>{{ $order->id }}</td>
                    <td>{{ $order->shipping_address }}, {{ $order->shipping_city }}, {{ $order->shipping_state }}, {{
                        $order->shipping_zipcode }}</td>
                    <td>{{ $order->shipping_phone }}</td>
                    <td>{{ $order->payment_method }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-primary">Ver</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


{{-- pedidos que realiso el usuario --}}
<div class="container">
    <div class="row">

        @foreach($order->posts as $post)

        <div class="col-sm-3 p-2">
            <h2>Este producto cantidad: {{$post->pivot->quantity}} </h2>

            <div class="card">
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-6 text-left">
                            <h3 class="card-text text-white">vistas: {{$post->vistas}}</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-success text-white" href="{{ route('checkout') }}">Precio:
                                {{$post->pivot->price}}</a>

                        </div>
                    </div>
                </div>

                {{-- genera un herror normal al crear los seeder porque tieness que refrescar la cache--}}
                {{-- <p>Autor: {{$post->user->name}}</p> --}}
                {{-- VALORES DE PRUEEBA ESTADUS DOS PARA LOS POST QUE SE PUEDAN VER --}}
                {{-- vistas del post --}}

                <p>Estatus: {{$post->status}} </p>
                <p>id: {{$post->id}} </p>

                <a href=" {{route('posts.show', $post)}} ">
                    <h5 class="card-title text-truncate" style="max-width: 200px;">Nombre del Post:{{$post->name}}</h5>
                </a>


                {{-- imagen del post --}}
                @if($post->image)
                <a href="{{route('posts.show', $post)}}">
                    <img src="{{$post->image->url}}" class="card-img-top" alt="...">
                    <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
                </a>
                @else
                <a href="{{route('posts.show', $post)}}">
                    <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg"
                        class="card-img-top" alt="...">
                </a>
                @endif


                <div class="card-body">

                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-truncate" style="max-width: 400px;">{{!! $post->body !!}}</p>
                    <p class="card-text text-truncate" style="max-width: 400px;">{{!! $post->extract !!}} </p>

                </div>



                <div class="card-footer">

                    <p>carrito:</p>
                </div>

            </div>
        </div>

        @endforeach

    </div>
</div>