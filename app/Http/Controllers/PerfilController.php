<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(){
       // $name='carlos';
       // $lastName = 'Ferreira';
       //,compact('name','lastName')
        return view('perfil');
    }
}
