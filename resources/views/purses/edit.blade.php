@extends('layouts.sb-client')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Billetera
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-table"></i><a href="{{url('/purses')}}"> Billetera</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Mi Billetera
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
	        <h2>Mi Billetera</h2><br>
	        @include('purses.form', ['url' => '/purses/'.$purse->id, 'method' => 'PATCH'])
	    </div>
	</div>
	<!-- /.row -->
</div>
@endsection