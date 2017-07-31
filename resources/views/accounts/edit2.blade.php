@extends('layouts.sb-client')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Cuentas
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-table"></i><a href="{{url('/accounts')}}"> Cuentas</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Retiro de Saldo
                </li>
            </ol>
        </div>
    </div>
<!-- /.row -->
@endsection

@section('content')
<div class="jumbotron">	

	<div class="row">
	    <div class="col-lg-12">
	        <h2>Retiro de Saldo</h2><br>
	        {!! Form::open(['url' => '/accounts/'.$account->id.'?type=2', 'method' => 'PATCH']) !!}
                <div class="form-group">
                    <label>Seguro que quieres Retirar tu Saldo.</label>
                    <button type="submit" class="btn btn-primary">De acuerdo</button>
                    <button type="reset" class="btn btn-default">Regresar</button>
                </div>

            {!! Form::close() !!}
	    </div>
	</div>
	<!-- /.row -->
</div>
@endsection