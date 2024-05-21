<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="text-center p-2 m-2">
        <h1 class="mb-5">Post</h1>
  
        <div class=" mb-20">
           <div class="row">

            {{-- columna 1 col-10 --}} 
            <div class="col-9">
     
            {{-- POPULAR PAGE--}}
              @include('livewire.home.post.partials.post-view-home')
     
            </div>
                 
            {{-- columna 2 col-2 --}}
            <div class="col-3">
            {{-- Todos lo blogs --}}
                @include('livewire.home.post.partials.recommended-post')
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

