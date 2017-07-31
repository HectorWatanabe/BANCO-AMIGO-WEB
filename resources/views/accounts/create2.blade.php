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
                    <i class="fa fa-table"></i> Nueva Cuenta
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
	        <h2>Nueva <small>Cuenta Financiando</small></h2><br>
	        @include('accounts.form', ['url' => '/accounts?bank_name=f', 'method' => 'POST'])
	    </div>
	</div>
	<!-- /.row -->
</div>
@endsection