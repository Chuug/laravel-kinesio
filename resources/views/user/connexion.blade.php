@extends('layouts.app')

@section('content')
   <div class="row">
      <div class="col-4 offset-4 bg-white shadow-sm p-5 mt-5">
         <form action="{{ route('user.login') }}" method="POST">
            @csrf
            <input type="text" name="email" placeholder="Email" class="form-control my-2" value={{ old('email') }}>
            @error('email')
               <span class="text-danger">{{ $message }}</span>
            @enderror
            <input type="password" name="password" placeholder="Mot de passe" class="form-control my-2">
            @error('password')
               <span class="text-danger">{{ $message }}</span>
            @enderror
            <button class="btn btn-info text-white d-block mt-2" type="submit">Connexion</button>
         </form>
      </div>
   </div>
@endsection