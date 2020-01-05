<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Produtos;
use App\Http\Requests\StoredRequest;

class Confirmproduto extends Controller
{
    
    protected $users;


    public function __construct(User $user)
    {
        $this->middleware('auth');
       // $this->middleware('log')->only('index');
       $this->users = $user;
    }
    public function confirm($id)
    {
        $produtos = auth()->user()->produtos;
        //$customer = Produtos::where('id', $id);
        //$customer =$id;
       // $customer =
       // $customer = auth()->user()->produtos->where('produto',$id);
        $customer = Produtos::find($id);
      // dd($customer);
        if ($customer) {
            return view ('index',compact(['customer','produtos']));
        
        }
        
        
    }


}
