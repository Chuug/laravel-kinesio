<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function register()
   {
      return view('user.register');
   }

   public function store(Request $request)
   {
      $user = User::create([
         'nom' => $request->nom,
         'prenom' => $request->prenom,
         'email' => $request->email,
         'password' => Hash::make($request->password)
      ]);

      if($user->save())
         return redirect()->route('index');
   }

   public function connexion()
   {
      return view('user.connexion');
   }

   public function login(Request $request)
   {
      $rules = [
         'email' => ['required','email'],
         'password' => ['required']
      ];

      $messages = [
         'email.required' => "Ce champs ne peut être vide",
         'email.email' => "L'adresse email n'est pas valide",
         'password.required' => "Ce champs ne peut être vide"
      ];

      $user = $this->validate($request, $rules, $messages);
      
      if(Auth::attempt($user)) {
         return redirect()->route('index');
      }
   }
}