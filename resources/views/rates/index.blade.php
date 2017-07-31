@extends('layouts.sb-admin')

@section('heading')
<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tasas
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-table"></i> Tasas
                </li>
            </ol>
        </div>
    </div>
<!-- /.row -->

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Crédito del Perú <small>Cuenta en Soles</small></h2>
            <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <a href="{{url('/rates/create?type=1')}}" type="button" class="btn btn-primary">
                            Agregar Tasa Crédito del Perú - Soles
                        </a>
                    </div>
            </div>
            
            <br>
        
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tipo de Plan</th>
                            <th>Tipo de Cuenta</th>
                            <th>Tasa (TEA)</th>
                            <th>Días</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates_cp_s as $rate_cp_s)
                        <tr>
                            <td>{{$rate_cp_s->bank_name}}</td>
                            <td>{{$rate_cp_s->type_rate}}</td>
                            <td>{{$rate_cp_s->rate * 100}} %</td>
                            <td>{{$rate_cp_s->days}}</td>
                            <td><a href="{{url('/rates/'.$rate_cp_s->id.'/penalties')}}" type="button" class="btn btn-danger">Penalidades</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <h2>Crédito del Perú <small>Cuenta en Dólares</small></h2> 
            <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <a href="{{url('/rates/create?type=2')}}" type="button" class="btn btn-primary">
                            Agregar Tasa Crédito del Perú - Dólares
                        </a>
                    </div>
            </div>
            
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tipo de Plan</th>
                            <th>Tipo de Cuenta</th>
                            <th>Tasa (TEA)</th>
                            <th>Días</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates_cp_d as $rate_cp_d)
                        <tr>
                            <td>{{$rate_cp_d->bank_name}}</td>
                            <td>{{$rate_cp_d->type_rate}}</td>
                            <td>{{$rate_cp_d->rate * 100}} %</td>
                            <td>{{$rate_cp_d->days}}</td>
                            <td><a href="{{url('/rates/'.$rate_cp_d->id.'/penalties')}}" type="button" class="btn btn-danger">Penalidades</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <h2>Financiando <small>Cuenta en Soles</small></h2> 
            <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <a href="{{url('/rates/create?type=3')}}" type="button" class="btn btn-primary">
                            Agregar Tasa Financiando - Soles
                        </a>
                    </div>
            </div>
            
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tipo de Plan</th>
                            <th>Tipo de Cuenta</th>
                            <th>Tasa (TEA)</th>
                            <th>Días</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates_f_s as $rate_f_s)
                        <tr>
                            <td>{{$rate_f_s->bank_name}}</td>
                            <td>{{$rate_f_s->type_rate}}</td>
                            <td>{{$rate_f_s->rate * 100}} %</td>
                            <td>{{$rate_f_s->days}}</td>
                            <td><a href="{{url('/rates/'.$rate_f_s->id.'/penalties')}}" type="button" class="btn btn-danger">Penalidades</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <h2>Financiando <small>Cuenta en Dólares</small></h2> 
            <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <a href="{{url('/rates/create?type=4')}}" type="button" class="btn btn-primary">
                            Agregar Tasa Financiando - Dólares
                        </a>
                    </div>
            </div>
            
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tipo de Plan</th>
                            <th>Tipo de Cuenta</th>
                            <th>Tasa (TEA)</th>
                            <th>Días</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rates_f_d as $rate_f_d)
                        <tr>
                            <td>{{$rate_f_d->bank_name}}</td>
                            <td>{{$rate_f_d->type_rate}}</td>
                            <td>{{$rate_f_d->rate * 100}} %</td>
                            <td>{{$rate_f_d->days}}</td>
                            <td><a href="{{url('/rates/'.$rate_f_d->id.'/penalties')}}" type="button" class="btn btn-danger">Penalidades</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- /.row -->
@endsection