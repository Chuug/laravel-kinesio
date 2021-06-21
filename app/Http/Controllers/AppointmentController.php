<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Helpers\Helpers;

class AppointmentController extends Controller 
{
   public function create()
   {
      $team = User::getTeam();
      $services = Helpers::getServices();

      return view('appointment.create', [
         'team' => $team,
         'services' => $services
      ]);
   }

   public function store(Request $request)
   {

   }

   public function destroy($id)
   {

   }
}
