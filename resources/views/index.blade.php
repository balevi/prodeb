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
                            <table  border="1" bordercolor="black">
                                <tr>
                                    <td><h3 style="float: left;padding:20px;">Produtos</h3></td>
                                    <td><h3 style="float: left;padding:20px;">Quantidade</h3></td>
                                    <td><h3 style="float: left;padding:20px;">valor</h3></td>
                                </tr>
                                @foreach ($produtos as $produto)
                                <tr>
                                        <td><h2 style="float: left;padding:20px;">{{$produto->produto}}<h2></td>
                                        <td><h2 style="float: left;padding:20px;">{{$produto->quantidade}}</h2></td>
                                        <td><h2 style="float: left;padding:20px;">{{$produto->valor}}</h2></td>
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
