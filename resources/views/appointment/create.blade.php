@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">
@endpush

@push('bottomScript')
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/rdv.js"></script>
@endpush

@section('content')
<div class="container">
   <div class="row">
      <div class="col-6 offset-3 bg-white shadow-sm mt-3 p-4">
         <h3 class="text-center">Rendez-vous</h3>
         <form action="{{ route('app.store') }}" method="post">
            @csrf
            <label for="kine" class="text-center text-muted d-block">- Kinésithérapeute -</label>
            @foreach ($team as $kine)
               <div class="form-check">
                  <input type="radio" name="kine" id="{{ $kine->id }}" value="{{ $kine->id }}" class="form-check-input" {{  ($kine->prenom === 'Hugo')?'checked':'' }}>
                  <label for="{{ $kine->id }}">{{ $kine->prenom }}</label>
               </div>
            @endforeach
            <label for="service" class="my-2 d-block text-center text-muted">- Service -</label>
            <select name="service" class="form-control">
               @for ($i = 0; $i < 10; $i++)
                  <option value="{{ $i }}">{{ $services[$i] }}</option>
               @endfor
            </select>
            <label for="date" class="my-2 d-block text-center text-muted">- Date -</label>
            <input type="text" class="form-control date-pick" name="day">
            <label for="hour" class="my-2 d-block text-center text-muted">- Heure -</label>
            <select name="hour" class="form-control">
               <option value="9" class="select-hour hour-9">9h00 - 10h00</option>
               <option value="10" class="select-hour hour-10">10h00 - 11h00</option>
               <option value="11" class="select-hour hour-11">11h00 - 12h00</option>
               <option value="13" class="select-hour hour-13">13h00 - 14h00</option>
               <option value="14" class="select-hour hour-14">14h00 - 15h00</option>
               <option value="15" class="select-hour hour-15">15h00 - 16h00</option>
               <option value="16" class="select-hour hour-16">16h00 - 17h00</option>
               <option value="17" class="select-hour hour-17">17h00 - 18h00</option>
            </select>
            <div class="text-center">
               <button type="submit" class="btn btn-info text-white mt-2">Prendre rendez-vous</button>
            </div>
            
         </form>
      </div>
   </div>
</div>
@endsection