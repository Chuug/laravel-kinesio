<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Appointment;
use App\Http\Helpers\Helpers;
use DateTime;

class AppointmentController extends Controller 
{
   public function create()
   {
      if(Auth::user()) {
         $team = User::getTeam();
         $services = Helpers::getServices();
   
         return view('appointment.create', [
            'team' => $team,
            'services' => $services
         ]);
      } else {
         return redirect()->route('register');
      }

   }

   public function store(Request $request)
   {
      $rdv = new Appointment();
      $rdv->user_id = Auth::user()->id;
      $rdv->kine_id = $request->kine;
      $rdv->service = $request->service;

      $exp = explode('/', $request->day);
      $string = $exp[2].'-'.$exp[1].'-'.$exp[0].' '.(($request->hour < 10)?'0':''.$request->hour).':00:00';
      $date = new DateTime($string);

      $rdv->app_date = $date;

      if($rdv->save()) 
         return redirect()->route('app.index');
   }

   public function index()
   {
      $apps = Appointment::all()->where('user_id', Auth::user()->id)->sortBy('app_date');
      $services = Helpers::getServices();
      return view('appointment.index', [
         'apps' => $apps,
         'services' => $services
      ]);
   }

   public function destroy($id)
   {
      $app = Appointment::findOrFail($id);
      if(Auth::user()->can('destroy', $app)) {
         if($app->delete())
            return redirect()->back();
      } else {
         abort(403);
      }
   }
}
