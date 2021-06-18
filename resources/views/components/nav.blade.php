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
               <a href="#hero" class="nav-link mx-2 scrollto">Accueil</a>
               <a href="#about" class="nav-link mx-2 scrollto">Qui sommes-nous</a>
               <a href="#services" class="nav-link mx-2 scrollto">Traitements</a>
               <a href="#team" class="nav-link mx-2 scrollto">équipe</a>
               <a href="#contact" class="nav-link mx-2 scrollto">Contact</a>
            </div>
         </div>
         <span class="me-2">Bonjour, {{ Auth::user()->prenom }}</span>
         <button class="btn btn-info text-white">Prendre rendez-vous</button>
      </div>
   </nav>
</header>