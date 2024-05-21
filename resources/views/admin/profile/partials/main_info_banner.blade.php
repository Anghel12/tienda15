<ul class="list-inline list-px-2">
    <li class="list-inline-item">
      <i class="bi-building me-1"></i>
      <span>Referal code: {{ $user->referral_code }}</span>
    </li>

    <li class="list-inline-item">
      <i class="bi-geo-alt me-1"></i>
      <a href="#">San Francisco,</a>
      <a href="#">US</a>
    </li>

    <li class="list-inline-item">
      <i class="bi-calendar-week me-1"></i>
      <span>se unio el {{ $user->created_at->format('Y-m-d') }}</span>
    </li>
  </ul>
  {{-- seguidores --}}

  <ul class="list-inline list-px-2">
    <li class="list-inline-item">
      <i class="bi-geo-alt me-1"></i>
      <a href="#">Seguidores</a>
      <a href="#">{{ $user->followers->count() }}</a>
    </li>
    <li class="list-inline-item">
        <i class="bi-geo-alt me-1"></i>
        <a href="#">siguiendo</a>
        <a href="#">{{ $user->following->count() }}</a>
      </li>

      <li class="list-inline-item">
        <i class="bi-geo-alt me-1"></i>
        <a href="#">Saldo</a>
        <a href="#"> 
          @foreach($user->coins as $coin)
      
          @if ($coin->pivot->balance)
              {{ $coin->pivot->balance }}
          @else
          0
          @endif
          
        @endforeach</a>
      </li>

  </ul>