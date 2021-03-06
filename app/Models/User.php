<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Appointment;

class User extends Authenticatable
{
   use HasFactory, Notifiable;

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'nom',
      'prenom',   
      'email',
      'password',
   ];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
      'password',
      'remember_token',
   ];

   /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   public function appointment() {
      return $this->hasMany(Appointment::class, 'id', 'kine_id');
   }

   public static function getTeam() {
      return User::all()->where('role','>',1);
   }

   public static function getUser($id) {
      return User::find($id);
   }
}
