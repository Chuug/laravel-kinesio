<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
   use HandlesAuthorization;

   public function addKine(User $user) {
      return $user->role === 3;
   }

   public function backoffice(User $user) {
      return $user->role >= 2;
   }
}
