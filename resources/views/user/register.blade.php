@extends('layouts.app')

@section('content')
   <main>
      <div class="container">
         <div class="row">
            <div class="col-6 offset-3 bg-white shadow-sm mt-5 p-5">
               <h4 class="text-muted text-center mb-4">- Inscription -</h4>
               <form action="{{ route('user.store') }}" method="POST">
                  @csrf
                  <div class="row">
                     <div class="col-6">
                        <input type="text" name="prenom" placeholder="Prenom" class="form-control">
                        @error('prenom')
                        <span class="text-danger m-2">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="col-6">
                        <input type="text" name="nom" placeholder="Nom" class="form-control">
                        @error('nom')
                        <span class="text-danger m-2">{{ $message }}</span>
                        @enderror
                     </div>

                  </div>
                  <input type="text" name="email" placeholder="Email" class="form-control my-2">
                  @error('email')
                  <span class="text-danger m-2">{{ $message }}</span>
                  @enderror
                  <input type="password" name="password" placeholder="Mot de passe" class="form-control my-2">
                  @error('password')
                  <span class="text-danger m-2">{{ $message }}</span>
                  @enderror
                  <button class="btn btn-info d-block mt-2 text-white" type="submit">S'enregistrer</button>
               </form>
            </div>
         </div>
      </div>
   </main>
@endsection