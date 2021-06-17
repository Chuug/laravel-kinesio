@extends('layouts.app')

@section('content')

   {{-- Hero --}}
   <section id="hero">
      <div class="container">
         <img src="/img/kinesio-hero.jpg" alt="">
         <div class="col-8 offset-2 hero-frame p-4 text-center">
            <h2>Bienvenue chez Kinesio</h2>
            <p>
               Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.
            </p>
            <a href="#" class="btn btn-info fw-bold text-white">Plus d'infos</a>
         </div>
      </div>      
   </section>

   <main id="main">
      {{-- Features --}}
      <section id="feature">
         <div class="container">
            <div class="row gx-5">
               <div class="col-lg-4 col-md-12">
                  <div class="p-4 shadow-sm bg-white rounded text-center">
                     <i class="fas fa-4x fa-running my-3"></i>
                     <h4>Kinésithérapie sportive</h4>
                     <p class="mt-3 mb-0">Vous êtes <span class="fw-bold">sportif</span> et vous êtes <span class="fw-bold">blessé</span>? Faites nous confiance pour vous <span class="fw-bold">accompagner</span> et <span class="fw-bold">prendre en charge votre blessure</span>. </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="p-4 shadow-sm bg-white rounded text-center">
                     <i class="fas fa-4x fa-spa my-3"></i>
                     <h4>Orthopédie - Traumatologie</h4>
                     <p class="mt-3 mb-0">Les <span class="fw-bold">lésions musculo-squelettiques</span> sont nombreuses et nécessitent une prise en charge de qualité, adaptée et <span class="fw-bold">individualisée</span>.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12">
                  <div class="p-4 shadow-sm bg-white rounded text-center">
                     <i class="fas fa-4x fa-lungs my-3"></i>
                     <h4>Kinésithérapie respiratoire</h4>
                     <p class="mt-3 mb-0"><span class="fw-bold">Difficultés respiratoires</span> ? Un traitement adapté peut être proposé afin de retrouver une <span class="fw-bold">fonction respiratoire optimale</span>.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      {{-- About us --}}
      <section id="about">
         <div class="container">
            <div class="section-title" data-aos="fade-down">
               <h2>Qui sommes-nous</h2>
               <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
               <div class="col-lg-6" data-aos="fade-right">
                  <img src="/img/building.jpg" class="building" alt="">
               </div>
               <div class="col-lg-6" data-aos="fade-left">
                  <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </p>
                </div>
            </div>
         </div>
      </section>

      {{-- Traitements --}}
      <section id="services" class="services">
         <div class="container">
            <div class="section-title" data-aos="fade-down">
               <h2>Nos traitements</h2>
               <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row gx-3">
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
                  <div class="p-5 text-center">
                     <img src="/img/service-1.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Kinésithérapie autour de la naissance</div>
                     <p class="mb-0">Le bien-être autour de la naissance est primordial pour vivre cet évenement si particulier de façon hamonieuse.  C'est pourquoi, nous accordons une attention toute partilière à la prise en charge du pré et du post-partum.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="p-5 text-center">
                     <img src="/img/service-2.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Périnéologie</div>
                     <p class="text-center mb-0">Un dysfonctionnement du périnée entrainant une pathologie quelconque, doit être pris en charge afin d'améliorer la qualité de vie.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="p-5 text-center">
                     <img src="/img/service-3.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Rééducation de la main</div>
                     <p class="text-center mb-0">Après un traumatisme, une immobilisation, un trouble musculo-squelettique..., la rééducation de la main est primordiale pour un retour à une fonctionnalité optimale.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
                  <div class="p-5 text-center">
                     <img src="/img/service-4.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Drainage lymphatique et pressothérapie</div>
                     <p class="text-center mb-0">Pour des problèmes circulatoires, un traitement composé de drainage lymphatique et/ou de pressothérapie peut être suggéré.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="p-5 text-center">
                     <img src="/img/service-5.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Revalidation neurologique</div>
                     <p class="text-center mb-0">La prise en charge de patients atteints d'affections neurologiques diverses a pour but de conserver ou d'améliorer une fonctionnalité optimale grâce à différentes méthodes.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="p-5 text-center">
                     <img src="/img/service-6.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Kinésithérapie respiratoire</div>
                     <p class="text-center mb-0">Difficultés respiratoires (nourisson, enfant, adulte)? Un traitement adapté peut être proposé afin de retrouver une fonction respiratoire optimale.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
                  <div class="p-5 text-center">
                     <img src="/img/service-7.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Orthopédie - Traumatologie</div>
                     <p class="text-center mb-0">Les lésions musculo-squelettiques sont nombreuses et nécessitent une prise en charge de qualité, adaptée et individualisée.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="p-5 text-center">
                     <img src="/img/service-8.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Kinésithérapie sportive</div>
                     <p class="text-center mb-0">Vous êtes sportif et vous êtes blessé? Faites nous confiance pour vous accompagner et prendre en charge votre blessure. </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="p-5 text-center">
                     <img src="/img/service-9.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Rééducation à la marche</div>
                     <p class="text-center mb-0">La rééducation à la marche permet d'améliorer l'autonomie afin de garantir un maximum de sécurité.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 offset-lg-4 mb-3" data-aos="fade-up">
                  <div class="p-5 text-center">
                     <img src="/img/service-10.jpg" class="service-img" alt="Femme enceinte">
                     <div class="title">Thérapie par ondes de chocs</div>
                     <p class="text-center mb-0">Besoin d'un traitement par ondes de chocs? Nous disposons d'un matériel de pointe pour ce type de traitement.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      {{-- Equipe --}}
      <section id="team">
         <div class="container">
            <div class="section-title" data-aos="fade-down">
               <h2>L'équipe</h2>
               <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
         </div>
      </section>

      {{-- Contact --}}
      <section id="contact">
         <div class="container">
            <div class="section-title" data-aos="fade-down">
               <h2>Contact</h2>
               <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
         </div>
      </section>
   </main>
@endsection