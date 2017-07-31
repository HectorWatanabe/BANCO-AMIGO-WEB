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
    <h1>Bienvenido a Banco Amigo!</h1>
    <img class="img-thumbnail" src="modern-business/img/tarjeta_credito.jpg" WIDTH=350 HEIGHT=200>
    <br>
    <p>El número de su tarjeta de débito es: 
    {{substr(Auth::user()->number, 0, 4)}}-{{substr(Auth::user()->number, 4, 4)}}-{{substr(Auth::user()->number, 8, 4)}}-{{substr(Auth::user()->number, 12, 4)}}.</p>
    <p>Ya puedes abrir cuentas con los planes "Crédito del Perú" y "Financiando".</p>
</div>
@endsection