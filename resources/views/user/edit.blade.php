@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-6 offset-3 bg-white shadow-sm mt-3 p-3">
         <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="row">
               <h6 class="text-muted text-center">- Informations générales -</h6>
               <div class="col">
                  <input type="text" class="form-control" placeholder="Prénom" name="prenom" value={{ $user->prenom }}>
               </div>
               <div class="col">
                  <input type="text" class="form-control" placeholder="Nom" name="nom" value={{ $user->nom }}>
               </div>
            </div>
            <input type="text" placeholder="Email" class="form-control my-2" name="email" value={{ $user->email }}>
            @if(Auth::user()->id === $user->id)
               <h6 class="text-muted text-center">- Changer le mot de passe -</h6>
               <input type="password" class="form-control" placeholder="Ancien mot de passe">
               <input type="password" class="form-control mt-2" name="password" placeholder="Nouveau mot de passe">
               <input type="password" class="form-control mt-2" placeholder="Confirmation nouveau mot de passe">
            @endif
            <h6 class="mt-3 text-muted text-center">- Spécialités -</h6>
            <div class="form-check">
               <input type="checkbox" value="0" class="form-check-input" id="check-1" name="specs[]" {{ (in_array(0, $specs))?'checked':'' }}>
               <label for="check-1" class="form-check-label">Kinésithérapie autour de la naissance</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="1" class="form-check-input" id="check-2" name="specs[]" {{ (in_array(1, $specs))?'checked':'' }}>
               <label for="check-2" class="form-check-label">Périnéologie</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="2" class="form-check-input" id="check-3" name="specs[]" {{ (in_array(2, $specs))?'checked':'' }}>
               <label for="check-3" class="form-check-label">Rééducation de la main</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="3" class="form-check-input" id="check-4" name="specs[]" {{ (in_array(3, $specs))?'checked':'' }}>
               <label for="check-4" class="form-check-label">Drainage lymphatique et pressothérapie</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="4" class="form-check-input" id="check-5" name="specs[]" {{ (in_array(4, $specs))?'checked':'' }}>
               <label for="check-5" class="form-check-label">Revalidation neurologique</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="5" class="form-check-input" id="check-6" name="specs[]" {{ (in_array(5, $specs))?'checked':'' }}>
               <label for="check-6" class="form-check-label">Kinésithérapie respiratoire</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="6" class="form-check-input" id="check-7" name="specs[]" {{ (in_array(6, $specs))?'checked':'' }}>
               <label for="check-7" class="form-check-label">Orthopédie - Traumatologie</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="7" class="form-check-input" id="check-8" name="specs[]" {{ (in_array(7, $specs))?'checked':'' }}>
               <label for="check-8" class="form-check-label">Kinésithérapie sportive</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="8" class="form-check-input" id="check-9" name="specs[]" {{ (in_array(8, $specs))?'checked':'' }}>
               <label for="check-9" class="form-check-label">Rééducation à la marche</label>
            </div>
            <div class="form-check">
               <input type="checkbox" value="9" class="form-check-input" id="check-10" name="specs[]" {{ (in_array(9, $specs))?'checked':'' }}>
               <label for="check-10" class="form-check-label">Thérapie par ondes de chocs</label>
            </div>   
            <button class="btn text-white btn-info mt-2">Sauvegarder les modifications</button>         
         </form>
      </div>
   </div>
</div>
@endsection