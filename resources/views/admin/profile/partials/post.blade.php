<div class="container text-center mb-20">
    <div class="row">
      <h1>Productos:</h1>
      @foreach($user->posts as $post)
      <div class="col-sm-12 p-2">
        <div class="card">
          <div class="card-header bg-dark">
            <div class="row">
              <div class="col-6 text-left">
                {{-- favoritos --}}
                @if (Auth::check())
                <form method="POST" action="{{ route('admin.favorites.store') }}">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-link">
                        <i class="far fa-heart"></i>
                    </button>
                </form>
                @endif
                {{-- favoritos --}}
                <p class="card-text text-white">vistas: {{ $post->vistas }}</p>
                <p>
                  @isset($post->price_reciente)
                  <p class="card-text"><small class="text-muted text-white">PRECIO: {{ $post->price_reciente }}</small></p>
                  @endisset
                </p>
              </div>
              <div class="col-6 text-right">
                @auth
                <a class="btn btn-success text-white" href="{{ route('checkout') }}">comprar</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-success">comprar</a>
                @endauth
              </div>
            </div>
          </div>
          <p>Estatus: {{ $post->status }}</p>
          <p>id: {{ $post->id }}</p>
          <a href="{{ route('posts.show', $post) }}">
            <h5 class="card-title text-truncate" style="max-width: 400px;">Nombre del Post: {{ $post->name }}</h5>
          </a>
          @if($post->image)
          <a href="{{ route('posts.show', $post) }}">
            <img src="{{ $post->image->url }}" class="card-img-top" alt="...">
            <img src="{{ Storage::url($post->image->url) }}" class="card-img-top" alt="...">
          </a>
          @else
          <a href="{{ route('posts.show', $post) }}">
            <img src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg" class="card-img-top" alt="...">
          </a>
          @endif
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text text-truncate" style="max-width: 400px;">{!! $post->body !!}</p>
            <p class="card-text text-truncate" style="max-width: 400px;">{!! $post->extract !!} </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  