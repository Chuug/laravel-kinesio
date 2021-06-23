<header id="header" class="fixed-top bg-white">
   <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container header">
         <a href="/" class="navbar-brand">
            <img src="/img/logo.png" class="logo">
            <span class="h4 fw-bolder align-middle ms-2 text-dark">KINESIO</span>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a href="{{ route('index')}}#hero" class="nav-link mx-2 scrollto">Accueil</a>
               <a href="{{ route('index')}}#about" class="nav-link mx-2 scrollto">Qui sommes-nous</a>
               <a href="{{ route('index')}}#services" class="nav-link mx-2 scrollto">Traitements</a>
               <a href="{{ route('index')}}#team" class="nav-link mx-2 scrollto">équipe</a>
               <a href="{{ route('index')}}#contact" class="nav-link mx-2 scrollto">Contact</a>
            </div>
         </div>
         @if(Auth::user())
         <span class="me-2">Bonjour, {{ Auth::user()->prenom }}</span>
         <a href="{{ route((Auth::user()->role > 1)?'user.backoffice':'app.index') }}" class="btn btn-info text-white me-1"><i class="fas fa-th-list fa-fw"></i></a>
         <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-info btn-sm text-white me-1"><i class="fas fa-sign-out-alt fa-fw"></i></button>
         </form> 
         
         @else
         <a href="{{ route('connexion') }}" class="btn btn-info text-white me-1"><i class="fas fa-sign-in-alt fa-fw"></i></a>
         @endif
         @if(!Auth::user() || Auth::user()->role === 1)
         <a href="{{ route('app.create') }}" class="btn btn-info text-white">Prendre rendez-vous</a>
         @endif
      </div>
   </nav>
</header>