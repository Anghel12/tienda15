<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

        <div class="text-center p-2 m-2">
            <h1 class="mb-5">show CATEGORY: {{ $category->name}}</h1>
    
            <div class="container mb-20">
            <div class="row">
  
                <div class="col-2">
        
       
            @include('livewire.home.category.partials.filtro')
        
                </div>
        
            
                <div class="col-10">
                    @include('livewire.home.category.partials.all_category')
                </div>
        
            </div>
        </div>
        
        </div>

    <style>
        .mb-10{
        margin-bottom: 2.5rem;
    }

    .mb-5{
        margin-bottom: 1.25rem;
    }
    </style>

</div>

