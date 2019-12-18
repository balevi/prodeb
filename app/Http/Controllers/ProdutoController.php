<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Produtos;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$produtos = App\Produto::find(1);
        //dd(auth()->user());
        $produtos = auth()->user()->produtos;
        //foreach($produtos as $produto){
        //$produto =    $produtos ? $produtos->produto : 'nenhum produto cadastrado';
        //$quantidade = $produtos ? $produtos->quantidade : 'nenhum produto cadastrado';
        //$valor =      $produtos ? $produtos->valor : 'nenhum produto cadastrado';
        return view ('index',compact('produtos'));
    //}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produtos $produtos)
    {   
        $pegaid = auth()->user();
        $produtos->user_id =$pegaid->id;
        $produtos->create($request->all());
        //$produtos->produto    = $request->produto;
        // $produtos->quantidade = $request->quantidade;
        //$produtos->valor      = $request->valor;
        $produtos->save();
        if ($produtos)
        return redirect()
                ->route('produto.index')
                ->with('success', 'Categoria inserida com sucesso!');
        return redirect()
                ->back()
                ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "mostra produto expecifico {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('editar',compact('id'));
       // $customer = Customer::findOrFail($id);
 
    //if ($customer) {
       // return view('customers.form', compact('customer'));
        //} else {
        //return redirect()->back();
        //}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "atualizando produto expecifico {$id}";
       // $customer = Customer::where('id', $id)->update($request->except('_token', '_method'));
 
       // if ($customer) {
           // return redirect()->route('customers.index');
       // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "deletando produto expecifico {$id}";
       // $customer = Customer::where('id', $id)->delete();
       
        //if ($customer) {
            //return redirect()->route('customers.index');
       // }
    
    }
}
