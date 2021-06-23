<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
{
   use HandlesAuthorization;

   public function destroy(User $user, Appointment $app) {
      return $user->id === $app->user_id || $user->id === $app->kine_id || $user->role === 3;
   }
}
