<ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

   
    <li class="nav-item">
      @if(Auth::user()->role=="admin")
      <a class="nav-link" href="{{ route('client.index') }}">
        <i class="fas fa-graduation-cap"></i>
        <span>Clients inscrit</span></a>
        @else
          <a class="nav-link" href="{{route('pdf')}}">
        <i class="fas fa-graduation-cap"></i>
        <span>Exporter en pdf</span></a>
            <a class="nav-link" href="{{route('modifier',Auth::user()->id)}}">
        <i class="fas fa-graduation-cap"></i>
        <span>Modifier ma condidature</span></a>
        @endif
    </li>
    
  </ul>