@extends('layouts.app')

@section('content')
   <main>
      <div class="container">
         <div class="row">
            <div class="col-6 offset-3 bg-white shadow-sm mt-5 p-5">
               <form action="{{ route('user.store') }}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col-6">
                        <input type="text" name="nom" placeholder="Nom" class="form-control">
                     </div>
                     <div class="col">
                        <input type="text" name="prenom" placeholder="Prenom" class="form-control">
                     </div>
                  </div>
                  <input type="text" name="email" placeholder="Email" class="form-control my-2">
                  <input type="password" name="password" placeholder="Mot de passe" class="form-control my-2">
                  <button class="btn btn-info text-white" type="submit">S'enregistrer</button>
               </form>
            </div>
         </div>
      </div>
   </main>
@endsection