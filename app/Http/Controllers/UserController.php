<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;
use App\Http\Helpers\Helpers;

class UserController extends Controller
{
   public function register()
   {
      return view('user.register');
   }

   public function store(Request $request)
   {
      $rules = [
         'prenom' => ['required'],
         'nom' => ['required'],
         'email' => ['required', 'email'],
         'password' => ['required']
      ];

      $messages = [
         'prenom.required' => 'Veuillez entrer votre prénom',
         'nom.required' => 'Veuillez entrer votre nom',
         'email.required' => 'Veuillez entrer votre email',
         'email.email' => "Cet email n'est pas valide",
         'password.required' => "Veuillez entre un mot de passe"
      ];

      $this->validate($request, $rules, $messages);

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

   public function logout(Request $request)
   {
      Auth::logout();
      
      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect()->route('index');
   }

   public function addKine()
   {
      if(Auth::user() && Auth::user()->can('addKine', User::class)) {
         return view('user.addKine');
      } else {
         abort(403);
      }
   }

   public function createKine(Request $request)
   {
      $rules = [
         'prenom' => ['required'],
         'email' => ['required', 'email']
      ];
      
      $messages = [
         'prenom.required' => 'Le prénom est requis',
         'email.required' => "L'email est requis",
         'email.email' => "L'email n'est pas valide"
      ];

      $this->validate($request,$rules,$messages);

      $specs = '';

      foreach($request->specs as $spec)
         $specs .= $spec;

      $user = new User();

      $user->nom = $request->nom;
      $user->prenom = $request->prenom;
      $user->email = $request->email;
      $pw = substr(sha1($request->email), 0, 10);
      $user->password = Hash::make($pw);
      $user->role = 2;
      $user->specs = $specs;

      if($user->save())
         return redirect()->route('user.backoffice');
   }

   public function backoffice()
   {
      
      if(Auth::user() && Auth::user()->can('backoffice', User::class)) {
         $services = Helpers::getServices();
         $team = null;
         $messages = null;
         if(Auth::user()->role === 3) {
            $team = User::getTeam();
            $messages = Message::all()->sortBy('created_at');
         }
         return view('user.backoffice', [
            'team' => $team,
            'messages' => $messages,
            'services' => $services
         ]);
      } else {
         abort(403);
      }
   }

   public function calendar($id)
   {

   }

   public function edit($id)
   {
      $user = User::getUser($id);
      $specs = str_split($user->specs);
      return view('user.edit', [
         'user' => $user,
         'specs' => $specs
      ]);
   }

   public function update(Request $request, $id)
   {
      $rules = [
         'prenom' => ['required'],
         'email' => ['required','email']
      ];
      $user = User::getUser($id);

      $specs = '';
      foreach($request->specs as $spec)
         $specs .= $spec;

      $user->prenom = $request->prenom;
      $user->nom = $request->nom;
      $user->email = $request->email;
      $user->specs = $specs;
      if($user->save())
         return redirect()->route('user.backoffice');
   }
}


