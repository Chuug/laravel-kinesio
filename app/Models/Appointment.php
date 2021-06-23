<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use DateTime;
use App\Http\Helpers\Helpers;

class Appointment extends Model
{
   use HasFactory;

   public function kine() 
   {
      return $this->belongsTo(User::class, 'kine_id', 'id');
   }

   public function client()
   {
      return $this->belongsTo(User::class, 'user_id', 'id');
   }

   public static function getAppointments($currentDay, $nextDay, $id)
   {
      return Appointment::all()->where('kine_id', $id)->whereBetween('app_date', [$currentDay, $nextDay]);
   }

   public static function getAppointmentsKine($id)
   {
      return Appointment::all()->where('kine_id', $id);
   }
}