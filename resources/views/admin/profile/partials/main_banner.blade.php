

<!-- Profile Cover -->
<div class="profile-cover">
  <div class="profile-cover-img-wrapper">
    <img class="profile-cover-img" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
  </div>
</div>
<!-- End Profile Cover -->

<!-- Profile Header -->
<div class=" mb-4">
  <!-- Avatar -->
  <div class="avatar avatar-xxl avatar-circle profile-cover-avatar">
    <img class="avatar-img" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />

    <span class="avatar-status avatar-status-success"></span>
  </div>
  <!-- End Avatar -->

  <!-- Mostrar otros detalles del perfil -->

  <div class="row">
    <div class="col-md-10">
      <h1 class="page-header-title">{{ $user->name }}
        <i class="bi-patch-check-fill fs-2 text-primary" data-bs-toggle="tooltip" data-bs-placement="top"
          aria-label="Top endorsed" data-bs-original-title="Top endorsed"></i>
      </h1>
      <p>
        {{-- falta corregir biografia --}}

      </p>
    </div>

    <div class="col-md-2 text-end">
      @if (!$user->isFollowedBy(auth()->user()) && $user->id !== auth()->user()->id)
      <form action="{{ route('admin.users.follow', $user) }}" method="POST">
        @csrf
        <button type="submit">Seguir</button>
      </form>
      @elseif ($user->id !== auth()->user()->id)
      <form action="{{ route('admin.users.unfollow', $user) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Dejar de seguir</button>
      </form>
      @endif
      {{-- editar perfil --}}
      @if ($user->id == auth()->user()->id)
      <form action="{{ route('admin.profile.edit', $user) }}" method="POST">
        @csrf
        <button type="submit">Editar perfil</button>
      </form>
      @endif

    </div>
  </div>