@extends('layouts.app')

@section('css')
@parent
@endsection

@section('sidebar')
@parent
@endsection

@section('header')
@endsection

@section('content')

	<!--banner-->
<div class="banner">
	<div class="banner-left about-banner-left">
		<div class="logo">
			<h1><a href="/">{{$company->name}}</a></h1>
			<h2><img src="{{asset('uploads/'.$company->logo.'')}}" height="50" width="50" alt=""/> {{$company->en_name}}</h2>
		</div>
	</div>
	<div class="banner-right about-banner-right">
		<div class="banner-image">
		</div>

	</div>
	<div class="clearfix"> </div>
</div>
	<!--//banner-->
	<!--about-->
	<div style="background: floralwhite; ">
		<div class="container">
				<div class="col-md-12 about-grids">
					<div class="codes">
						<div class="col-md-6 latest-news-grid">
							<h4 class="hdg">作者：{{$company->charger}}</h4>
						</div>
						<div class="col-md-6 ">
							<h4 class="hdg" style="float: right">时间：{{$company->created_at}}</h4>
						</div>
						<div class="well">
							{!! $company->content !!}
						</div>
					</div>
			</div>
		</div>
	</div>

@endsection
		<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@section('scripts')
	<script src="{{asset('Front_js/bootstrap.js')}}"></script>
@endsection