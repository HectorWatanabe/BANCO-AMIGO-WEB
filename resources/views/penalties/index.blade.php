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
                    <i class="fa fa-table"></i> Penalidades
                </li>
            </ol>
        </div>
    </div>
<!-- /.row -->

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Penalidades</h2>
            <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <a href="{{url('rates/'.$rate_id.'/penalties/create')}}" type="button" class="btn btn-primary">
                            Agregar Penalidad
                        </a>
                    </div>
            </div>

            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th>Penalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penalties as $penalty)
                        <tr>
                            <td>{{$penalty->description}}</td>
                            <td>{{$penalty->penalty * 100}} %</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- /.row -->
@endsection