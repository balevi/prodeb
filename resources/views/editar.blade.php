@extends('adminlte::page')

@section('title', 'Prodeb')

@section('content_header')
    <h1 class="m-0 text-dark">Prodeb TI</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                                <h1>ATUALIZE SEU PRODUTO!</h1><br>
                                <h3 style="float: left;padding:10px;">Produtos</h3>
                                <h3 style="float: left;padding:10px;">Quantidade</h3>
                                <h3 style="float: left;padding:10px;">valor</h3><br><br><br>
                                    
                                <form  action="{{ route('produto.update',$produto->id) }}" method="post">
                                @method('PUT')
                                @csrf
                               

                                <input type="text" name= "produto" value= "{{$produto->produto}}" required>
                                
                                <input type="text" name= "quantidade" value= "{{$produto->quantidade}}" required>
                                <input type="text" name= "valor" value= "{{$produto->valor}}" required>
                                <button type="submit">Salvar</button>
                        </div>

                                @include('Includes.alert')                             
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
