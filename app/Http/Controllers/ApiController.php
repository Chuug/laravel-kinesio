<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use DateTime;
use App\Http\Helpers\Helpers;

class ApiController extends Controller 
{
   public function getUser($id)
   {
      return response()->json(User::getUser($id));
   }

   public function getApp($day, $month, $year, $id)
   {
      $date = new DateTime($year.'-'.$month.'-'.$day);
      $date = $date->format('Y-m-d H:i:s');
      $currentDay = new DateTime($date);
      $currentDay = $currentDay->format('Y-m-d H:i:s');
      $nextDay = new DateTime($date);
      $nextDay = $nextDay->modify('+1 day')->format('Y-m-d H:i:s');
      $appointmemts = Appointment::getAppointments($currentDay, $nextDay, $id);

      $hours = [];
      $i = 0;
      foreach($appointmemts as $app) {
         $dt = new DateTime($app->app_date);
         $hours[$i] = $dt->format('H');
         $i++;
      }
      return response()->json($hours);
   }

   public function getAppKine($id)
   {
      $appointments = Appointment::getAppointmentsKine($id);

      $events = [];
      $i = 0;
      $services = Helpers::getServices();
      foreach($appointments as $app) {
         $start = new DateTime($app->app_date);
         $end = new DateTime($app->app_date);
         $end = $end->modify('+1 hour');
         $events[$i]['title'] = $app->client->prenom;
         $events[$i]['description'] = $services[$app->service];
         $events[$i]['start'] = $start->format('Y-m-d H:i:s');
         $events[$i]['end'] = $end->format('Y-m-d H:i:s');

         $i++;
      }

      return response()->json($events);
   }
}