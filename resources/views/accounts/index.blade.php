@extends('layouts.sb-client')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Cuentas
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-table"></i> Cuentas
                </li>
            </ol>
        </div>
    </div>
<!-- /.row -->
@endsection

@section('content')
<div class="jumbotron">
	<div class="row">
	  <div class="col-xs-12 col-md-8">
	  	<a href="{{url('/accounts/create')}}" type="button" class="btn btn-primary">
	  		Crear Cuenta Crédito del Perú
	  	</a>
	  	<a href="{{url('/accounts/create2')}}" type="button" class="btn btn-primary">
	  		Crear Cuenta Financiando
	  	</a>
	  </div>
	</div>
	<hr>
    <div class="row">
	    <div class="col-lg-12">
	        <h2>Cuentas</h2> 
	            <div class="table-responsive">
	                <table class="table table-bordered table-hover">
	                    <thead>
	                        <tr>
	                            <th>N° Cuenta</th>
	                            <th>Tipo de Plan</th>
	                            <th>Días de Plazo</th>
	                            <th>Saldo</th>
	                            <th>Días Transcurridos</th>
	                            <th>Intereses</th>
	                            <th>Total</th>
	                            <th>Opciones</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($accounts as $account)
	                        <tr>
	                            <td>{{$account->account}}</td>
	                            <th>{{$account->rate()->bank_name}}</th>
	                            <th>{{$account->rate()->days}}</th>
	                            @if($account->rate()->type_rate == 'Soles')
	                            <td>s/ {{$account->balance}}</td>
	                            <td>{{$account->days}}</td>
	                            <td>s/ {{$account->interest}}</td>
	                            <td>s/ {{$account->balance + $account->interest}}</td>
	                            @else
	                            <td>$ {{$account->balance}}</td>
	                            <td>{{$account->days}}</td>
	                            <td>$ {{$account->interest}}</td>
	                            <td>$ {{$account->balance + $account->interest}}</td>
	                            @endif
	                            <th>
									<a href="{{url('/accounts/'.$account->id.'/edit?type=1')}}" type="button" class="btn btn-success">
										<i class="glyphicon glyphicon-time"></i>
									</a>
	                            	<a href="{{url('/accounts/'.$account->id.'/edit?type=2')}}" type="button" class="btn btn-danger">
	                            		Retiro
	                            	</button>
	                            </th>
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