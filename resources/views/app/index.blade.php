@extends('layouts.app')

@section('content')
   {{-- Hero --}}
   <section id="hero" style="padding-top: 0px !important">
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
                  <img src="/img/service-1.jpg" class="service-img" alt="Kinésithérapie autour de la naissance">
                  <div class="title">Kinésithérapie autour de la naissance</div>
                  <p class="mb-0">Le bien-être autour de la naissance est primordial pour vivre cet évenement si particulier de façon hamonieuse.  C'est pourquoi, nous accordons une attention toute partilière à la prise en charge du pré et du post-partum.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
               <div class="p-5 text-center">
                  <img src="/img/service-2.jpg" class="service-img" alt="Périnéologie">
                  <div class="title">Périnéologie</div>
                  <p class="text-center mb-0">Un dysfonctionnement du périnée entrainant une pathologie quelconque, doit être pris en charge afin d'améliorer la qualité de vie.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="600">
               <div class="p-5 text-center">
                  <img src="/img/service-3.jpg" class="service-img" alt="Rééducation de la main">
                  <div class="title">Rééducation de la main</div>
                  <p class="text-center mb-0">Après un traumatisme, une immobilisation, un trouble musculo-squelettique..., la rééducation de la main est primordiale pour un retour à une fonctionnalité optimale.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
               <div class="p-5 text-center">
                  <img src="/img/service-4.jpg" class="service-img" alt="Drainage lymphatique et pressothérapie">
                  <div class="title">Drainage lymphatique et pressothérapie</div>
                  <p class="text-center mb-0">Pour des problèmes circulatoires, un traitement composé de drainage lymphatique et/ou de pressothérapie peut être suggéré.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
               <div class="p-5 text-center">
                  <img src="/img/service-5.jpg" class="service-img" alt="Revalidation neurologique">
                  <div class="title">Revalidation neurologique</div>
                  <p class="text-center mb-0">La prise en charge de patients atteints d'affections neurologiques diverses a pour but de conserver ou d'améliorer une fonctionnalité optimale grâce à différentes méthodes.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="600">
               <div class="p-5 text-center">
                  <img src="/img/service-6.jpg" class="service-img" alt="Kinésithérapie respiratoire">
                  <div class="title">Kinésithérapie respiratoire</div>
                  <p class="text-center mb-0">Difficultés respiratoires (nourisson, enfant, adulte)? Un traitement adapté peut être proposé afin de retrouver une fonction respiratoire optimale.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up">
               <div class="p-5 text-center">
                  <img src="/img/service-7.jpg" class="service-img" alt="Orthopédie - Traumatologie">
                  <div class="title">Orthopédie - Traumatologie</div>
                  <p class="text-center mb-0">Les lésions musculo-squelettiques sont nombreuses et nécessitent une prise en charge de qualité, adaptée et individualisée.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
               <div class="p-5 text-center">
                  <img src="/img/service-8.jpg" class="service-img" alt="Kinésithérapie sportive">
                  <div class="title">Kinésithérapie sportive</div>
                  <p class="text-center mb-0">Vous êtes sportif et vous êtes blessé? Faites nous confiance pour vous accompagner et prendre en charge votre blessure. </p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" data-aos-delay="600">
               <div class="p-5 text-center">
                  <img src="/img/service-9.jpg" class="service-img" alt="Rééducation à la marche">
                  <div class="title">Rééducation à la marche</div>
                  <p class="text-center mb-0">La rééducation à la marche permet d'améliorer l'autonomie afin de garantir un maximum de sécurité.</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-4 mb-3" data-aos="fade-up">
               <div class="p-5 text-center">
                  <img src="/img/service-10.jpg" class="service-img" alt="Thérapie par ondes de chocs">
                  <div class="title">Thérapie par ondes de chocs</div>
                  <p class="text-center mb-0">Besoin d'un traitement par ondes de chocs? Nous disposons d'un matériel de pointe pour ce type de traitement.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   {{-- Equipe --}}
   <section id="team" class="team">
      <div class="container">
         <div class="section-title" data-aos="fade-down">
            <h2>L'équipe</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>
         <div class="row gx-3">
            <div class="col-3">
               <div class="member bg-white shadow-sm p-0" data-aos="fade-up">
                  <div class="member-img">
                     <img src="/img/team/doctors-1.jpg" alt="Walter White" class="img-fluid">
                  </div>
                  <div class="member-info p-3 text-center">
                     <span class="h5 fw-bold">Swag</span>
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="member bg-white shadow-sm p-0" data-aos="fade-up" data-aos-delay="300">
                  <div class="member-img">
                     <img src="/img/team/doctors-1.jpg" alt="Walter White" class="img-fluid">
                  </div>
                  <div class="member-info p-3 text-center">
                     <span class="h5 fw-bold">Swag</span>
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="member bg-white shadow-sm p-0" data-aos="fade-up" data-aos-delay="600">
                  <div class="member-img">
                     <img src="/img/team/doctors-1.jpg" alt="Walter White" class="img-fluid">
                  </div>
                  <div class="member-info p-3 text-center">
                     <span class="h5 fw-bold">Swag</span>
                  </div>
               </div>
            </div>
            <div class="col-3">
               <div class="member bg-white shadow-sm p-0" data-aos="fade-up" data-aos-delay="900">
                  <div class="member-img">
                     <img src="/img/team/doctors-1.jpg" alt="Walter White" class="img-fluid">
                  </div>
                  <div class="member-info p-3 text-center">
                     <span class="h5 fw-bold">Swag</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   {{-- Contact --}}
   <section id="contact" class="contact">
      <div class="container" data-aos="fade-down">
         <div class="section-title">
            <h2>Contact</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>
      </div>

      <div data-aos="face-down">
         <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4271.028099995874!2d4.860677605003159!3d50.467759365388844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb27bd8f328503c9f!2sBurger%20King%20Namur!5e0!3m2!1sfr!2sbe!4v1624004604448!5m2!1sfr!2sbe" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
         <div class="row gx-4">
            <div class="col-6" data-aos="fade-right">
               <div class="row mt-5">
                  <div class="col-12">
                     <div class="info-box">
                        <i class="contact-icon fas fa-2x fa-map-marker-alt"></i>
                        <h3>Adresse</h3>
                        <p>Place de la Station 8/9, 5000 Namur</p>
                     </div>
                  </div>
                  <div class="col-6 mt-4">
                     <div class="info-box">
                        <i class="contact-icon fas fa-2x fa-envelope"></i>
                        <h3>Email</h3>
                        <p>info@kinesio.be</p>
                     </div>
                  </div>
                  <div class="col-6 mt-4">
                     <div class="info-box">
                        <i class="contact-icon fas fa-2x fa-phone"></i>
                        <h3>Téléphone</h3>
                        <p>+32 494 60 76 70</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-6 mt-5" data-aos="fade-left">
               <div class="info-box form">
                  <form>
                     <div class="row">
                        <div class="col-6">
                           <input type="text" placeholder="Votre nom" class="form-control">
                        </div>
                        <div class="col-6">
                           <input type="text" placeholder="Votre email" class="form-control">
                        </div>
                     </div>
                     <input type="text" placeholder="Sujet" class="form-control mt-3">
                     <textarea placeholder="Message" class="form-control mt-3" rows="5"></textarea>
                     <button type="submit" class="btn btn-info text-white mt-3">Envoyer</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection