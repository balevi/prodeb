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
        
        $data = $request->all();
        $data["user_id"]= auth()->user()->id;     
        $produtos->create($data);
        //metodo create inseri tudo nem precisa save
        //$produtos->produto    = $request->produto;
        //$produtos->quantidade = $request->quantidade;
        // $produtos->valor      = $request->valor;
        //$produtos->user_id      = auth()->user()->id;
        //$produtos->save();
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
       
        //
        $produto = Produtos::findOrFail($id);
        return view ('editar',compact('produto'));
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
        
        $editar = Produtos::where('id', $id)->update($request->except('_token', '_method'));
 
        if ($editar) {
            return redirect()->route('produto.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Produtos::where('id', $id)->delete();
       
        if ($customer) {
            return redirect()->route('produto.index');
        }
    
    }

}
