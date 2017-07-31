@extends('layouts.sb-admin')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tasas
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-table"></i><a href="{{url('/rates')}}"> Tasas</a>
                </li>
                <li class="active">
                    <i class="fa fa-table"></i> Nueva Penalidad
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
	        <h2>Nueva Penalidad</h2>
	        @include('penalties.form', ['url' => '/rates/'.$rate_id.'/penalties', 'method' => 'POST'])
	    </div>
	</div>
	<!-- /.row -->
</div>
@endsection