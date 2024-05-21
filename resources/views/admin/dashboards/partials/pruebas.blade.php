{{-- pruebas de la vista dashboard --}}
<div class="container">
    <div class="row">
        <div class="col-3">
        <div class="card p-3">

            <div class="card-header ">
                <h4>TOTAL DE USUARIOS </h4>
                <button type="button" class="btn btn-primary position-relative">
                    {{$users->count()}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                   
                      <span class="visually-hidden">+1</span>
                    </span>
                  </button>
            </div>
          
        </div>
    </div>

    <div class="col-3">
        <div class="card p-3">

            <div class="card-header ">
                <h4>TOTAL PEDIDOS </h4>
                <button type="button" class="btn btn-primary position-relative">
                    {{$pedidos->count()}} 
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                   
                      <span class="visually-hidden">+1</span>
                    </span>
                  </button>
            </div>
          
        </div>
    </div>
    <div class="col-3">    
        <div class="card p-3">

            <div class="card-header ">
                <h4>Categorias </h4>
                <button type="button" class="btn btn-primary position-relative">
                     {{$categories->count()}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                   
                      <span class="visually-hidden">+1</span>
                    </span>
                  </button>
            </div>
          
        </div>
    </div>
    <div class="col-3">  
        <div class="card p-3">

            <div class="card-header ">
                <h4>TODOS LOS POST </h4>
                <button type="button" class="btn btn-primary position-relative">
                     {{$posts->count()}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                   
                      <span class="visually-hidden">+1</span>
                    </span>
                  </button>
            </div>
          
        </div>
    </div>
    <div class="col-3">  
        <div class="card p-3">

            <div class="card-header ">
                <h4>ROLES</h4>
                    @foreach ($roles as $item)
                     <p>{{$item->name}}.</p>

                    @endforeach

            </div>
          
        </div>
    </div>

    <div class="col-3">  
        <div class="card p-3">

            <div class="card-header ">
                <h4>TAGS </h4>
                <button type="button" class="btn btn-primary position-relative">
                     {{$tags->count()}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                   
                      <span class="visually-hidden">+1</span>
                    </span>
                  </button>
            </div>
          
        </div>
    </div>

    
    <div class="col-3">  
        <div class="card p-3">

            <div class="card-header ">
                <h4>Proveedores</h4>
                <button type="button" class="btn btn-primary position-relative">
                     {{$proveedores->count()}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                   
                      <span class="visually-hidden">+1</span>
                    </span>
                  </button>
            </div>
          
        </div>
    </div>
  
    </div>
</div>