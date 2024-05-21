<x-app-layout>

    views tags ETIQUETAS

    
<h1> ETIQUETA: {{$tag->name}}  {{$tag->id}} </h1>

<div class=" container">
    <div class="row">

        ta bien
        @foreach ($posts as $post)
       <x-card-post :post="$post" />
    
        @endforeach

    </div>
</div>

<div class="footer">
    {{$posts->links()}}
</div>
   
</x-app-layout>

