<?php

namespace App\Http\Controllers;

use App\Models\User;

class ApiController extends Controller 
{
   public function getUser($id)
   {
      return response()->json(User::getUser($id));
   }
}