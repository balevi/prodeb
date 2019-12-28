<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Produtos;

class ProdutoController extends Controller
{
    protected $users;


    public function __construct(User $user)
    {
        $this->middleware('auth');
       // $this->middleware('log')->only('index');
       $this->users = $user;
    }


    

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
       
        $validatedData = $request->validate([
            'produto' => ['required', 'unique:produtos' ,'max:10', 'min:4'],
            'quantidade' => ['required','numeric'],
            'valor' => ['required','numeric']
            //'quantidade' => ['required','numeric', 'max:3','min:1'],
            //'valor' => ['required','numeric','max:5','min:2']
        ]);
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
                ->with('success','Produto Cadastrado com sucesso!');
        return redirect()
                ->back()
                ->with('error', 'Falha ao Cadastra');
    }

    /** style="background-color:green"
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $produtos = auth()->user()->produtos->where('produto',$request->consulta);
       // dd($produtos);
        if ($produtos->isNotEmpty())
        return view ('index',compact('produtos'));
        else 
        return redirect()
                ->back()
                ->with('error', 'Produto não encontrado!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
   
        $produto = Produtos::findOrFail($id);
        return view ('editar',compact('produto'));
    
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
            
        $validatedData = $request->validate([
            'produto' => ['required', 'max:10', 'min:4'],
            'quantidade' => ['required','numeric'],
           // 'valor' => ['required|string|min:3|max:5']
        ]);
        //'numeric'
        $editar = Produtos::where('id', $id)->update($request->except('_token', '_method'));
 
        if ($editar) {
            return redirect()->route('produto.index')->with('success','Produto Editado com sucesso!');
            return redirect()
            ->back()
            ->with('error', 'Falha ao Editar');
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
            return redirect()->route('produto.index')->with('success','Produto Excluido com sucesso!');
            return redirect()
            ->back()
            ->with('error', 'Falha ao Excluir');
        }
    
    }

}
