@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-6 offset-3 bg-white shadow-sm mt-3 p-4">
         <h3 class="text-center">Rendez-vous</h3>
         <label for="kine">Kinésithérapeute</label>
         @foreach ($team as $kine)
            <div class="form-check">
               <input type="radio" name="kine" id="{{ $kine->id }}" class="form-check-input">
               <label for="{{ $kine->id }}">{{ $kine->prenom }}</label>
            </div>
         @endforeach
         <label for="service" class="mt-2">Service</label>
         <select name="service" class="form-control">
            @for ($i = 0; $i < 10; $i++)
               <option value="{{ $i }}">{{ $services[$i] }}</option>
            @endfor
         </select>
         <label for="date" class="mt-2">Date</label>
         <input type="text" class="form-control">
      </div>
   </div>
</div>
@endsection