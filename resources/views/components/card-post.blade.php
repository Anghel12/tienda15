 @props(['post'])
 
 {{--  <article style="background-image: url({{storage::url($post->image->url)}})" ></article> --}}
        {{--  <article style="background-image: url({{$post->image->url}})" > ok</article> --}}
         <h1>{{$post->status}}</h1>

        <div class="card" style="width: 18rem;">
            <div class="h1">
                <h5 class="card-title">Autor: {{$post->user->name}}</h5>
            </div>
            
            @if($post->image)
            <img src="{{$post->image->url}}" class="card-img-top" alt="...">
            <img src="{{Storage::url($post->image->url)}}" class="card-img-top" alt="...">
            @else
            <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="card-img-top" alt="...">
            @endif 

            <div class="card-body">
             <a href=" {{route('posts.show', $post)}} ">
                <h5 class="card-title" >{{$post->name}}</h5>
            </a>
              <p class="card-text">{{$post->body}}</p>
              
              <a href="#" class="btn btn-primary">{{$post->extract}}</a>
            </div>
        </div>
        <H1>ETIQUETAS:</H1>
        @foreach ($post->tags as $tag)
        <a href="#" class="btn btn-primary">{{$tag->name}}.</a>
        @endforeach