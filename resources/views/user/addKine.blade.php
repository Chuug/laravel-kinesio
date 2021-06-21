@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
@endpush

@push('bottomScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script>
   let cropper = null;
   let hint = document.querySelector('.hint');
   let loadFile = (event) => {
      if(cropper)
         cropper.destroy();
      let image = document.getElementById('output');
      image.src = URL.createObjectURL(event.target.files[0]);

      hint.style.display = 'block';

      cropper = new Cropper(image, {
         aspectRatio: 1 / 1,
         viewMode: 1,
         background: false
      });
   };
</script>
@endpush

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-8 offset-2 bg-white shadow-sm mt-3 p-5">
            <h4 class="mb-3">Ajouter un.e kinésithérapeute</h4>
            <form action="{{ route('user.createKine') }}" method="POST" id="form">
               @csrf
               <input type="text" placeholder="Nom" name="nom" class="form-control my-2">

               <input type="text" placeholder="Prénom" name="prenom" class="form-control my-2">
               @error('prenom')
                  <div class="text-danger">{{ $message }}</div>
               @enderror

               <input type="text" placeholder="Email" name="email" class="form-control my-2">
               @error('email')
                  <div class="text-danger">{{ $message }}</div>
               @enderror

               <h5 class="my-3">Photo</h5>      
               <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" class="form-control img-input my-3">
               <span class="hint"><i class="fas fa-info-circle"></i> Une image avec une résolution trop petite pourrait donner un rendu pixelisé</span>
               <img id="output" class="cropping shadow-sm">

               <h5 class="my-3">Spécialités</h5>
               <div class="form-check">
                  <input type="checkbox" value="0" class="form-check-input" id="check-1" name="specs[]">
                  <label for="check-1" class="form-check-label">Kinésithérapie autour de la naissance</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="1" class="form-check-input" id="check-2" name="specs[]">
                  <label for="check-2" class="form-check-label">Périnéologie</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="2" class="form-check-input" id="check-3" name="specs[]">
                  <label for="check-3" class="form-check-label">Rééducation de la main</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="3" class="form-check-input" id="check-4" name="specs[]">
                  <label for="check-4" class="form-check-label">Drainage lymphatique et pressothérapie</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="4" class="form-check-input" id="check-5" name="specs[]">
                  <label for="check-5" class="form-check-label">Revalidation neurologique</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="5" class="form-check-input" id="check-6" name="specs[]">
                  <label for="check-6" class="form-check-label">Kinésithérapie respiratoire</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="6" class="form-check-input" id="check-7" name="specs[]">
                  <label for="check-7" class="form-check-label">Orthopédie - Traumatologie</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="7" class="form-check-input" id="check-8" name="specs[]">
                  <label for="check-8" class="form-check-label">Kinésithérapie sportive</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="8" class="form-check-input" id="check-9" name="specs[]">
                  <label for="check-9" class="form-check-label">Rééducation à la marche</label>
               </div>
               <div class="form-check">
                  <input type="checkbox" value="9" class="form-check-input" id="check-10" name="specs[]">
                  <label for="check-10" class="form-check-label">Thérapie par ondes de chocs</label>
               </div>
               <button type="submit" class="btn btn-info text-white mt-2 send-form">Sauvegarder</button>
            </form>
         </div>
      </div>
   </div>
@endsection
