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
                            <h3>CADASTRE SEUS PRODUTOS!</h3><br>
                                @csrf
                                <form method="post" action="{{ route('produto.store') }}">
                                <input type="text" name= "produto" placeholder= "digite seu produto..." required>
                                <input type="text" name= "quantidade" placeholder= "digite a quantidade..." required>
                                <input type="text" name= "valor" placeholder= "digite o preço..." required>
                                <input type="submit">
                         </div>                           
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
