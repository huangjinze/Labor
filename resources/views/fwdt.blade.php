@extends('layouts.app')

@section('css')
	@parent
{{--	<link rel="stylesheet" href="{{asset('Front_css/flexslider.css')}}" type="text/css" media="screen" />--}}
@endsection

@section('sidebar')
	@parent
@endsection


@section('header')
	<div class="testimonials">
		<div class="container">
			<h3 class="title">服务动态</h3>
		</div>
	</div>
@endsection


@section('content')
	<!--news-->
	<style>
		.col-xs-7 ,.col-xs-5{
			width: auto;!important;
		}
		.latest-news-grid{
			margin-right: 40px;
		}
	</style>
	<div class="news-events" id="news">
		<div class="container">
			@for ($i = 0; $i < count($datas); $i++)
				<div class="latest-news">
					<div class="latest-news-grids">
						<div class="col-md-3 latest-news-grid">
							<div class="col-xs-5 latest-news-grid-left">
								<img src="{{asset('uploads/'.$datas[$i]->cover.'')}}"  alt=" " height="200px" width="200px" class="img-responsive">
							</div>
							<div class="col-xs-7 latest-news-grid-right">
								<p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
									<span>{{$datas[$i]->created_at}}</span></p>
								<h4><a href="/fwdt/{{$datas[$i]->id}}">{{$datas[$i]->title}}</a></h4>
								<p class="man"></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						@if(($i+1)%3==0)
							<div class="col-md-3 latest-news-grid">
							</div>
							<div class="clearfix"> </div>
						@endif
					</div>
				</div>
			@endfor

		</div>
		<div class="latest-news" style="text-align: center">
			{{ $datas->render() }}
		</div>
	</div>
	<!--//news-->
@endsection
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
@section('scripts')
    <script src="{{asset('Front_js/bootstrap.js')}}"></script>
@endsection