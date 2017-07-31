@extends('layouts.modern-business')

@section('carousel')
	<!-- Header Carousel -->
	<header id="myCarousel" class="carousel slide">
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            <li data-target="#myCarousel" data-slide-to="2"></li>
	        </ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			        <div class="fill" style="background-image:url('modern-business/img/main1.jpg');"></div>
			        <div class="carousel-caption">
			            <h2>Invierte con Nosotros</h2>
			        </div>
			    </div>
			    <div class="item">
			        <div class="fill" style="background-image:url('modern-business/img/main2.jpg');"></div>
			        <div class="carousel-caption">
			            <h2>Disfruta de tus Ahorros</h2>
			        </div>
			    </div>
			    <div class="item">
			        <div class="fill" style="background-image:url('modern-business/img/main3.jpg');"></div>
			        <div class="carousel-caption">
			            <h2>Administra tu dinero</h2>
			        </div>
			    </div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="icon-next"></span>
			</a>	
	</header>
@endsection


@section('marketing')
	<!-- Marketing Icons Section -->
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            
	        </h1>
	    </div>
	    <div class="col-md-4">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h4><i class="fa fa-fw fa-check"></i>Inversión</h4>
	            </div>
	            <div class="panel-body">
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-4">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h4><i class="fa fa-fw fa-gift"></i> Adquiere una Cuenta</h4>
	            </div>
	            <div class="panel-body">
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-4">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h4><i class="fa fa-fw fa-compass"></i>Nosotros</h4>
	            </div>
	            <div class="panel-body">
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /.row -->
@endsection