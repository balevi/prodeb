@extends('adminlte::page')

<style>
.tdEspaco{ padding-left: 45px;}
</style>
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
                            
                            <table>
                                <tr>
                                    <td><h3 class='tdEspaco'>Produtos</h3></td>
                                    <td><h3 class='tdEspaco'>Quantidade</h3></td>
                                    <td><h3 class='tdEspaco'>valor</h3></td>
                                </tr>
                                    <tr>
                                        <td><h2>{{$produto}}<h2></td>
                                        <td><h2>{{$quantidade}}</h2></td>
                                        <td><h2>{{$valor}}</h2></td>
                                    </tr>
                                        
                            </table>
                         </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <class="small-box-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
