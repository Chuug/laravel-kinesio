@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col mt-3 p-3 bg-white shadow-sm">
         <h4 class="text-center text-muted my-3">- Mes rendez-vous -</h4>
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Service</th>
                  <th>Kiné</th>
                  <th>Heure</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               @foreach ($apps as $app)
                  <tr>
                     <td>{{ $services[$app->service] }}</td>
                     <td>{{ $app->kine->prenom }} <span class="text-uppercase">{{ $app->kine->nom }}</span></td>
                     <td>Le {{ \Carbon\Carbon::parse($app->app_date)->format('d/m/Y')}} à {{ \Carbon\Carbon::parse($app->app_date)->format('H')}}h</td>
                     <td>
                        <form action="{{ route('app.destroy', $app->id) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-sm btn-outline-danger float-end">Annuler</button>
                        </form>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>

      </div>
   </div>
</div>
@endsection