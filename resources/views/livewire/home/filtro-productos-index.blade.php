<div class="container">
  <div class="row">
   <h1>livewire FILTRADO DE PRECIOS POSTS</h1>

<div class="col-3">
  <label for="">paginate</label>
    <select id="perPage" wire:model="perPage" class="form-select" aria-label="Default select example">
        <option value="4">4</option>
        <option value="12">12</option>
        <option value="32">32</option>
        <option value="all">all</option>

    </select>
</div>


        {{-- por precio filtro  --}}

<div class="col-3">
        <div class="col-auto">
            <input id="min_price" wire:model.lazy="min_price">
          </div>
        <div class="col-auto">
            <input id="min_price" wire:model.lazy="max_price">
          </div>
      </div>

    <div class="col-6">
        <div class="brand">
            <h1>Marcas </h1>
            <ul>     
                @foreach ($this->Brands as $brand)
   
                <div class="form-check">
                <li>
                <div class="form-check">
                    <input type="checkbox" id="checkbox{{$brand->id}}"

                    wire:model="filters.brands.{{$brand->id}}"
                    value="">
                    
                    <label for="checkbox{{$brand->id}} ">
    
        {{-- en la vista se mostrara [comer] 4   [correr] 46--}}
                  {{--   <span>({{$category->tag->count()}})</span> --}}
                  {{-- relacionar maracas con posts --}}
              <span>{{$brand->posts->count()}}</span> 
                    <span>{{$brand->title}}</span>
                    </label>
                </div>
            </div>
            </li>
     
            @endforeach
        </ul>
     
        </div>  
    </div>

{{-- SUB CATEGORIES  --}}
<div class="col-6">
  <div class="brand">
      <h1>Categorias </h1>
      <ul>
      
    
        @foreach ($this->Categories as $brand)

          <div class="form-check">
          <li>
          <div class="form-check">
              <input type="checkbox" id="checkbox{{$brand->id}}"

              wire:model="filters.categories.{{$brand->id}}"
              value="">
              
              <label for="checkbox{{$brand->id}} ">

  {{-- en la vista se mostrara [comer] 4   [correr] 46--}}
            {{--   <span>({{$category->tag->count()}})</span> --}}
            {{-- relacionar maracas con posts --}}
        <span>{{$brand->posts->count()}}</span> 
              <span>{{$brand->name}}</span>
              </label>
          </div>
      </div>
      </li>

      @endforeach
  </ul>

  </div>  
</div>

  </div>
    {{-- dasflllllllllllllldf --}}


   <div class="container text-center" >

        <div class="row" >
        
          <h1>Productos: </h1>
      
              @foreach ($this->Results as $post)
           
          <div class="col-sm-3 p-2">
        
        
              <div class="card max-width: 400px;">
                  <div class="card-header">
                   <p>Estatus: {{$post->status}} </p>
                   <p>id: {{$post->id}} </p>
                   
                  </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>

                  <p class="card-text text-truncate" style="max-width: 400px;">brand:{{ $post->brand->title }}</p>
                  <p class="card-text text-truncate" style="max-width: 400px;">cat:{{ $post->category->name }}</p>
                  <p class="card-text text-truncate" style="max-width: 400px;">precio:{{ $post->price_reciente }} </p>
                  
                </div>
                  
              </div>
           </div>
           
       
        
                @endforeach
             
        </div>
        <div class="footer">
            {{$this->Results->links()}}
          </div>
    

        </div> 

         
      
    
</div>
