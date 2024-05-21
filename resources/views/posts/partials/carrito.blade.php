<div class="col-sm-8">
    @if (count(Cart::content()))
        <div class="col sm-8">
          {{-- alerta para el carrito --}}
            <p class="text-center">Resumen Carrito Vista resumen posts index</p>
            <table class="table table-striped">
              
                <tbody>
                    @foreach (Cart::content() as $item)
                        <tr>
                          <td> ID:{{$item->id}} </td>
                            <td> NOMBRE: {{$item->name}} </td>
                       {{--      <td> {{$item->qty}} x {{$item->price}}</td> --}}
                            <td>PRECIO: {{$item->price}}</td>
                            {{-- imagen del carrito de compras --}}
                            @if($item->options->urlfoto)
                          {{--   <a href="{{route('posts.show', $post)}}"> --}}
                           <td class="col-2"> <img src="{{Storage::url($item->options->urlfoto)}}" class=" card-img-top" alt="..."> </td>
                           @endif
  
  
                        </tr>
                    @endforeach
                    <tr>
                        <td><p class="text-end">  Subtotal Usd {{Cart::subtotal()}} </p> </td>
                        <td><p class="text-end">  Impuesto 18% {{Cart::tax()}} </p> </td>
                        <td><p class="text-end">  Subtotal Usd {{Cart::total()}} </p> </td>
                    </tr>
  
                    
  
  
                      
                </tbody>
            </table>
            <p class="text-center"><a href="/vercarrito" class="btn btn-outline-success btn-sm">Ver el carrtio</a></p>
        </div>
    @endif
  </div>
  
  
  {{--     <p> {{$sliders->title}} </p>
      <p> {{$sliders->body}} </p> --}}