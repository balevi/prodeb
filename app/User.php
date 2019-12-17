<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Produtos;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function produtos(){
        return $this->hasOne(produtos::class);
        // relacionamento 1 pra 1 hasOne(produtos::class);many
    }

    //public function users(){
       // return $this->hasOne(User::class);
        // relacionamento 1 pra 1 hasOne(produtos::class);many
    //}
}
