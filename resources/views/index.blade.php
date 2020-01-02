@extends('adminlte::page')

@section('title', 'Prodeb')

@section('content_header')
    <h1 class="m-0 text-dark">Prodeb TI</h1>
@stop

@section('content')
@include('Includes.alert')
<form action="{{ route('produto.show','f') }}" method="get" class="form-inline ml-2 mr-2">
@csrf
        <div class="input-group">
        
          <input class="form-control form-control-navbar" type="search" name="consulta" placeholder="Pesquisar" aria-label="search">
          
          <div class="input-group-append">
          
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
            
          </div>
          
        </div>
      </form>
       
    <div class="row">
        
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    
                    <div class="small-box bg-yellow">
                        <div class="inner">                         
                            <table border="1" bordercolor="black">
                                <tr>
                                    <td><h3 style="float: left;padding:20px;">Produtos</h3></td>
                                    <td><h3 style="float: left;padding:20px;">Quantidade</h3></td>
                                    <td><h3 style="float: left;padding:20px;">valor</h3></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach ($produtos as $produto)
                                <tr>
                                
                                    <td><h2 style="float: left;padding:20px;">{{$produto->produto}}<h2></td>
                                    <td><h2 style="float: left;padding:20px;">{{$produto->quantidade}}</h2></td>
                                    <td><h2 style="float: left;padding:20px;">{{ number_format($produto->valor,2,',','')}}</h2></td>
                                    <td><div><a href= "{{ route('produto.edit',$produto->id) }}"class="btn btn-outline-primary">Editar</a></div></td>
                                
                                    <td><div><form action="{{ route('produto.destroy', $produto->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Excluir" class="btn btn-outline-danger"></form></div></td>
                                
                                </tr>
                                @endforeach      
                            </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
