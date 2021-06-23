@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-6 mt-3 bg-white shadow-sm p-4 offset-3">
         <div class="team-img text-center">
            <img src="/img/team/doctors-1.jpg" alt="Walter White" class="img-fluid shadow-sm">
            <h4 class="mt-3">{{ $membre->prenom }} <span class="text-uppercase">{{ $membre->nom }}</span></h4>
         </div>
         <h5 class="mt-3">Spécialités</h5>
         <ul>
            @foreach ($specs as $spec)
            <li>{{ $services[$spec] }}</li>
            @endforeach
         </ul>
         <div class="d-grid">
            <a href="{{ route('app.create') }}" class="btn btn-primary mt-3">Prendre rendez-vous</a>
          </div>
      </div>
   </div>
</div>
@endsection