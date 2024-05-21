<div class="row">

  <h1> CATEGORIA: </h1>

  @foreach ($posts as $post)

  <div class="col-md-4">
    <div class="card">
      <img
        src="https://img.freepik.com/vector-premium/fondo-negro-lujoso-abstracto-linea-dorada-fondo-moderno-elegante-espacio-copia-puede-utilizar-plantilla-folleto-portada-poster-banner-web-anuncio-impreso-etc_181182-15361.jpg"
        class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$post->category}}</h5>
        <span class="badge bg-dark">Administrador</span>
        <span class="badge bg-primary">Administrador</span>
        <span class="badge bg-success">vender</span>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  @endforeach

  <div class="col-md-4">
    <div class="card">
      <img
        src="https://img.freepik.com/vector-premium/fondo-negro-lujoso-abstracto-linea-dorada-fondo-moderno-elegante-espacio-copia-puede-utilizar-plantilla-folleto-portada-poster-banner-web-anuncio-impreso-etc_181182-15361.jpg"
        class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <img
        src="https://img.freepik.com/vector-premium/fondo-negro-lujoso-abstracto-linea-dorada-fondo-moderno-elegante-espacio-copia-puede-utilizar-plantilla-folleto-portada-poster-banner-web-anuncio-impreso-etc_181182-15361.jpg"
        class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
