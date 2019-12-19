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
                            <h3>ATUALIZE SEU PRODUTO!</h3><br>
                                <form  action="{{ route('produto.store') }}" method="post">
                                @csrf
                                {{--<input type="hidden" name= "user_id" value = "{{auth()->user()->id}}">--}}
                                <input type="text" name= "produto" value= "{{$produtos->produto}}" required>
                                <input type="text" name= "quantidade" placeholder= "digite a quantidade..." required>
                                <input type="text" name= "valor" placeholder= "digite o preço..." required>
                                <button type="submit">Salvar</button>
                         </div>                           
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
