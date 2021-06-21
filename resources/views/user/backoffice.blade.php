@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col mt-3 p-3 bg-white shadow-sm">
         <h4 class="float-start text-capitalize">équipe</h4>
         <a href="{{ route('user.addKine') }}" class="btn btn-sm btn-info float-end text-white"><i class="fas fa-plus me-2"></i>Ajouter un membre</a>
         <table class="table table-sm mb-0">
            <thead>
               <tr>
                  <th>Nom</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               @foreach ($team as $membre)
               <tr>
                  <td>{{ $membre->prenom }}</td>
                  <td>
                     <a href="{{ route('user.edit', ['id' => $membre->id]) }}" class="btn btn-sm btn-outline-success float-end ms-2">Modifier</a>
                     <a href="{{ route('user.calendar', ['id' => $membre->id]) }}" class="btn btn-sm btn-outline-success float-end">Calendrier</a>
                  </td>
               </tr>      
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

@endsection