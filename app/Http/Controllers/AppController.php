<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class AppController extends Controller
{
   public function index()
   {
      $team = User::all()->where('role', '>', 1);
      return view('app.index', [
         'team' => $team
      ]);
   }

   public function sendMessage(Request $request)
   {
      $rules = [
         'nom' => ['required'],
         'email' => ['required', 'email'],
         'sujet' => ['required'],
         'message' => ['required']
      ];

      $messages = [
         'nom.required' => 'Un nom est requis',
         'email.required' => "Un email est requis",
         'email.email' => "L'email n'est pas valide",
         'sujet.required' => 'Un sujet est requis',
         'message.required' => "Un message est requis"
      ];

      $this->validate($request, $rules, $messages);

      $message = new Message();
      $message->nom = $request->nom;
      $message->email = $request->email;
      $message->subject = $request->sujet;
      $message->message = $request->message;

      if($message->save()) 
         return redirect()->back();
   }

   public function destroyMessage($id)
   {
      $message = Message::findOrFail($id);
      if($message->delete())
         return redirect()->back();
   }
}