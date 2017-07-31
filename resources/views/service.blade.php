@extends('layouts.modern-business')

@section('carousel')
	<!-- Header Carousel -->
	<header id="myCarousel" class="carousel slide">
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	            <li data-target="#myCarousel" data-slide-to="1"></li>
	            
	        </ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			        <div class="fill" style="background-image:url('img/Servicios1.jpg');"></div>
			        <div class="carousel-caption">
			            <h2>Ahorra en Soles</h2>
			        </div>
			    </div>
			    <div class="item">
			        <div class="fill" style="background-image:url('img/Servicios2.jpg');"></div>
			        <div class="carousel-caption">
			            <h2>Ahorra en Dolares</h2>
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
	    <div class="col-md-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h4><i class="fa fa-fw fa-check"></i>Tasas del BCP</h4>
	            </div>
	            <div class="panel-body">
	                <p>Disfruta de nuestras tasas basadas en el modelo del BCP</p>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-6">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h4><i class="fa fa-fw fa-check"></i>Tasas Financiero</h4>
	            </div>
	            <div class="panel-body">
	                <p>DIsfruta de nuestras tasas basadas en el modelo del banco Financiero</p>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /.row -->
@endsection