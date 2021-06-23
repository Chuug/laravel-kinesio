@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.css">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
@endpush

@push('bottomScript')
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js"></script>

<script>


document.addEventListener('DOMContentLoaded', function() {


   $.ajax({
      url: 'http://kinesitherapie.test/api/get-app-kine/1'
   }).done((rep) => {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
         headerToolbar: { center: 'dayGridDay,timeGridWeek,dayGridMonth' },
         initialView: 'dayGridMonth',
         events: rep,
         buttonText: {
            today: "Aujourd'hui",
            day: "Jour",
            week: "Semaine",
            month: "Mois"
         },
         firstDay: 1
      });
      calendar.render();
      calendar.setOption('locale','fr')
      })
});



</script>
@endpush

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
                  <td>{{ $membre->prenom }} <span class="text-uppercase">{{ $membre->nom }}</span></td>
                  <td>
                     @if(!$membre->claimed)
                     <span>{{ substr(sha1($membre->email), 0, 10) }}</span>
                     @endif
                     <a href="{{ route('user.edit', ['id' => $membre->id]) }}" class="btn btn-sm btn-outline-success float-end ms-2">Modifier</a>
                     <a href="{{ route('user.calendar', ['id' => $membre->id]) }}" class="btn btn-sm btn-outline-success float-end">Calendrier</a>
                  </td>
               </tr>      
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   <div class="row">
      <div class="col mt-4 p-3 bg-white shadow-sm">
         <span class="d-none kine-id">{{ Auth::user()->id }}</span>
         <div id="calendar"></div>
      </div>
   </div>
   <div class="row">
      <div class="col mt-4 p-3 bg-white shadow-sm">
         <h4>Messages</h4>
         <table class="table">
            <thead>
               <tr>
                  <th>Nom</th>
                  <th>Sujet</th>
                  <th>Message</th>
                  <th>Email</th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
                  @foreach ($messages as $message)
                     <tr>
                        <td>{{ $message->nom }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->email }}</td>
                        <td>
                           <form action="{{ route('app.destroyMessage', $message->id) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-outline-danger float-end btn-sm"><i class="fas fa-trash"></i></button>
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