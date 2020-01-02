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
                            <h1>CADASTRE SEUS PRODUTOS!</h1><br>
                                <h3 style="float: left;padding:10px;">Produtos</h3>
                                <h3 style="float: left;padding:10px;">Quantidade</h3>
                                <h3 style="float: left;padding:10px;">valor</h3><br><br><br>
                                <form  action="{{ route('produto.store') }}" method="post">
                                @csrf
                                {{--<input type="hidden" name= "user_id" value = "{{auth()->user()->id}}">--}}
                                <input type="text" name= "produto" placeholder= "digite seu produto..." value = "{{old('produto')}}">
                                <input type="text" name= "quantidade" placeholder= "digite a quantidade..." value = "{{old('quantidade')}}">
                                <input type="text" name= "valor" placeholder= "digite o preço..." required value = "{{old('valor')}}">
                                <button type="submit">Enviar</button>
                                
                        </div>       
                        @include('Includes.alert')                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
