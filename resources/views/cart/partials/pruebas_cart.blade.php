
{!! Form::open( ['route' => 'CrearOrden','method' => 'POST']) !!}
        

<div class="form-group">
    {!! Form::label('fullname', 'Nombre completo') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Categoria']) !!}

    @error('fullname')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    {!! Form::label('address', 'Calle') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Calle']) !!}

    @error('address')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>


<div class="form-group">
    {!! Form::label('city', 'ciudad') !!}
    {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la ciudad']) !!}

    @error('city')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    {!! Form::label('state', 'Estado') !!}
    {!! Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la state']) !!}

    @error('state')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    {!! Form::label('zipcode', 'zipcode') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la zipcode']) !!}

    @error('zipcode')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    {!! Form::label('phone', 'Telefono') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la Telefono']) !!}

    @error('phone')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>


{{-- metodos de pago --}}

<div class="form-group">
<p class="font-weight-bold">Metodo de pagos</p>

<label for="">
{!! Form::radio('payment_method', 'cash_on_delivery', ) !!}
cash_on_delivery
</label>

<label for="">
{!! Form::radio('payment_method', 'paypal', true) !!}
paypal
</label>


{{--   stripe
card --}}

@error('status')
<hr>
<span class="text-danger"> {{$message}} </span>
@enderror 
</div>


{!! Form::submit('crear orden', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}




<div class="container">
    <div class="row">
        <div class="col-sm-8">
             {{-- alerta para el carrito --}}
            @if (session('info'))
            <div class="alert alert-success">
                 <strong> {{session('info')}} </strong>
            </div>
            @endif
                <div class="col sm-8">
                    @if (\Cart::content()->count())
          <p class="text-center">Resumen Carrito Vista resumen posts index</p>
         
              
          <div class="card">
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>FOTO</th>
                    <th>FOTO</th>
                    <th>ID</th>
                    <th>NOMBRE</th>  
                    <th>PRECIO</th> 
                    <th>CANTIDAD</th> 
                    <th>IMPUESTOS</th> 
                    <th colspan=""></th>
                </tr>
            </thead>
              <tbody>
                  @foreach (Cart::content() as $item)
                      <tr>

                        @if($item->options->urlfoto)
                        {{--   <a href="{{route('posts.show', $post)}}"> --}}
                         <td class="col-2"> <img src="{{Storage::url($item->options->urlfoto)}}" class=" card-img-top" alt="..."> </td>
               
                       @endif
                          <td> {{$item->ID}} </td>
                          <td> {{$item->name}} </td>
                          <td> {{$item->price}}</td>

                          <td> <a href="/decrementar/{{$item->rowId}}"> - </a>
                       
                            <button type="button" class="btn btn-sm"> {{$item->qty}} </button>
                          
                          
                          <a href="/incrementar/{{$item->rowId}}"> + </a></td>

                          <td> {{number_format($item->qty * $item->price,2)}} </td>
    
                          <td width="10px" >
                            <td> <a class="btn btn-danger" href="/eliminar/{{$item->rowId}}"> elmininar </a></td>
                          <td width="10px" >
                            
                        </td> 
                      </tr>
                     
                  @endforeach
                  <tr><td colspan="7"><p class="text-end">  SUBTOTAL {{Cart::subtotal()}} </p> </td> </tr>
                   <tr><td colspan="7"><p class="text-end">  RENTA {{Cart::tax()}} </p> </td> </tr>
                   <tr><td colspan="7"><p class="text-end">  TOTAL {{Cart::total()}} </p> </td></tr>
                 
              </tbody>
          </table>
        </div>
     
      </div>
         
          <div class="col-sm-4">
              <a href=" {{route('eliminarcarrito')}} " class="btn btn-danger">Eliminar Carrtito de compras </a>
                @auth

                <a href="{{route('checkout')}}" class="btn btn-success">Pagar: Soles. ${{Cart::total()}}</a>

                {{-- confimar carrito a un falta  --}}
{{-- 
                <a href="{{route('comfirmarcarrito')}}" class="btn btn-success">Procesar pedido </a>
 --}}
                @else

                <a href=" {{ route('login') }} " class="btn btn-success">Entrar para ordenar </a>
                @endauth
          </div>
            {{-- en caso no encuentre ningun pedido  --}}
          @else
            <div class="tex-center">Carrito vacio</div>
            <div class="tex-center"><a class="btn btn-primary" href="{{ route('posts.index') }}"> Ver El catalago de los Productos</a>
            </div>
         @endif
          
        </div>
    </div>
</div>