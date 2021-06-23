@extends('layouts.app')

@section('content')
   <div class="row">
      <div class="col-4 offset-4 bg-white shadow-sm p-5 mt-5">
         <h4 class="text-center text-muted mb-3">- Connexion -</h4>
         <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email" class="form-control my-2" value={{ old('email') }}>
            @error('email')
               <span class="text-danger">{{ $message }}</span>
            @enderror
            <input type="password" name="password" placeholder="Mot de passe" class="form-control my-2">
            @error('password')
               <div class="text-danger">{{ $message }}</span>
            @enderror
            <div class="d-block">
               <button class="btn btn-info text-white mt-2 float-start" type="submit">Connexion</button>
               <a href="{{ route('register') }}" class="mt-3 float-end">M'inscrire</a>
            </div>

         </form>
      </div>
   </div>
@endsection