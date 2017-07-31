@extends('layouts.sb-admin')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuarios
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-fw fa-bar-chart-o"></i> Usuarios
                </li>
            </ol>
        </div>
    </div>
<!-- /.row -->

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Número de Tarjeta</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                {{substr($user->number, 0, 4)}}-{{substr($user->number, 4, 4)}}-{{substr($user->number, 8, 4)}}-{{substr($user->number, 12, 4)}}
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- /.row -->


@endsection