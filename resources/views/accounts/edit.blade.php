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
                    <i class="fa fa-table"></i> Cambiar Días Transcurridos
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
	        <h2>Cambiar <small>Días Transcurridos</small></h2><br>
	        {!! Form::open(['url' => '/accounts/'.$account->id.'?type=1', 'method' => 'PATCH']) !!}
                <div class="form-group">
                    <label>Días Transcurridos</label>
                    {{Form::number('days', $account->days, [ 'class' => 'form-control','placeholder' => 'Registra un número de días transcurrido', 'required'])}}
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-default">Regresar</button>
            {!! Form::close() !!}
	    </div>
	</div>
	<!-- /.row -->
</div>
@endsection