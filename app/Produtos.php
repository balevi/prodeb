<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Produtos extends Model
{
    protected $fillable = [
        'produto', 'quantidade', 'valor','user_id',
    ];

    public function user(){
        return $this->hasOne(User::class);
        // user_id
    }
}
