
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Sobre mi</h3>
    </div>
    @if ($user->profile)
    <div class="card-body">
    <strong><i class="fas fa-book mr-1"></i> Título: {{ $user->profile->titulo }}</strong>
    <p class="text-muted">
        Biografía: {{ $user->profile->biografia }}
    </p>
    <hr>

    <strong><i class="fas fa-book mr-1"></i>  Sitio web:</strong>
    <p class="text-muted">
       URL {{ $user->profile->website }}
    </p>
    <hr>
    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
    <p class="text-muted">Malibu, California</p>
    <hr>
    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
    <p class="text-muted">
    <span class="tag tag-danger">UI Design</span>
    <span class="tag tag-success">Coding</span>
    <span class="tag tag-info">Javascript</span>
    <span class="tag tag-warning">PHP</span>
    <span class="tag tag-primary">Node.js</span>
    </p>
    <hr>
    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
    <hr>

    @else
    <div class="card-body">
    <p>Crear Biografia.</p>
    @endif

    <strong><i class="far fa-file-alt mr-1"></i> Link de Referido</strong>
    <p class="text-muted">{{$referralLink}}</p>
    
    </div>
    
    </div>