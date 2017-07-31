@extends('layouts.sb-client')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>
<!-- /.row -->
@endsection

@section('content')
<div class="jumbotron">
    <h1>Transfiere tu dinero a tu cuenta!</h1>
    <img class="img-thumbnail" src="modern-business/img/paypal-logo.jpg" WIDTH=350 HEIGHT=200>
    <br>

    
    <p>Empieza ingresando aquí: 
        <br>
        @if($true_s != 1)
        <a href="{{url('/purses/create?type=1')}}" type="button" class="btn btn-primary">
            Depositar Dinero Soles
        </a>
        @endif
        @if($true_d != 1)
        <a href="{{url('/purses/create?type=2')}}" type="button" class="btn btn-primary">
            Depositar Dinero Dólares
        </a>
        @endif
    </p>
    
    <br>
    
    <div class="row">
        <div class="col-lg-12">
            <h2>Cuentas</h2> 
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Compañia</th>
                                <th>Tipo de Dinero</th>
                                <th>Efectivo</th>
                                <th>Fecha de Creación</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($purses as $purse)
                            <tr>
                                <td>{{$purse->company}}</td>
                                <th>{{$purse->type_cash}}</th>
                                @if($purse->type_cash == 'Soles')
                                <td>s/ {{$purse->cash}}</td>
                                @else
                                <td>$ {{$purse->cash}}</td>
                                @endif
                                <td>{{$purse->created_at}}</td>
                                <td><a href="{{url('/purses/'.$purse->id.'/edit')}}" type="button" class="btn btn-info">Cambiar Saldo</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <!-- /.row -->  


</div>
@endsection