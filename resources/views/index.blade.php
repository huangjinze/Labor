@extends('layouts.app')

@section('sidebar')
	@parent
@endsection

@section('header')

@endsection

@section('content')
<style>
	.trip-text {
		font-family:"Times New Roman", Times, serif;
		font-size: 20px;
	}
</style>
	<!--banner-->
	<div class="banner" id="home">
		<div class="banner-left">
			<div class="logo">
				<h1><a href="/">{{$company->name}}</a></h1>
				<h2><img src="{{asset('uploads/'.$company->logo.'')}}" height="50" width="50" alt=""/> {{$company->en_name}}</h2>
				<div class="address">
					<p>{{$company->address}}</p>
					<p>E-mail: <a href="mailto:info@example.com">{{$company->mail}}</a></p>
					<p class="phn"><span class="glyphicon glyphicon-earphone"></span>{{$company->phone}}</p>
					<p class="phn"><span class="glyphicon glyphicon-earphone"></span>{{$company->telephone}}</p>
				</div>
				<a class="book hvr-outline-out scroll" href="#contact-us" > 联系我们 !</a>
			</div>
		</div>
		<div class="banner-right">
			<!--banner Slider starts Here-->
			<script src="{{asset('Front_js/responsiveslides.min.js')}}"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 3
				  $("#slider3").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					  $('.events').append("<li>before event fired.</li>");
					},
					after: function () {
					  $('.events').append("<li>after event fired.</li>");
					}
				  });

				});
			</script>
			<!--//End-slider-script-->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-image">
						</div>
					</li>
					<li>
						<div class="banner-image banner-image1">
						</div>
					</li>
					<li>
						<div class="banner-image banner-image2">
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="title">劳务派遣</h3>
			<div class="banner-bottom-grids">
				@for($i=0; $i<count($Data['lwpq']); $i++)
				<div class="col-md-2 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">0.{{$i+1}}</p>
						<div class="banner-bottom-grid-rel-pos">
							<a class="trip-text" href="/lwpq/{{$Data['lwpq'][$i]->id}}">{{$Data['lwpq'][$i]->title}}</a>
							<p>{{$Data['lwpq'][$i]->author}}</p>
							<p>{{$Data['lwpq'][$i]->created_at}}</p>
						</div>
					</div>
				</div>
				@endfor
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--trip-->
	<div class="trip">
		<div class="container">	
			<h3 class="title">人力资源服务</h3>
			<div class="trip-info">
				@for($i=0; $i<count($Data['rlzy']); $i++)
					<div class="col-md-2 trip-left">
						<a class="trip-text" href="/rlzy/{{$Data['rlzy'][$i]->id}}">{{$Data['rlzy'][$i]->title}}</a>
						<p>{{$Data['rlzy'][$i]->author}}</p>
						<img src="{{asset(''.$Data['rlzy'][$i]->cover.'')}}" height="100" width="100" alt=""/>
					</div>
				@endfor
				<div class="col-md-3 trip-right">
					<div class="border">
						<img src="{{asset('images/img1.jpg')}}" alt=""/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-grid-->
	<!--news-->
	<div class="news-events" id="news">
		<div class="container">
			<h3 class="title">劳务外包</h3>
			<div class="latest-news">
				<div class="latest-news-grids">
					@for($i=0; $i<count($Data['lwwb']); $i++)
						<div class="col-md-6 latest-news-grid">
							<div class="col-xs-5 latest-news-grid-left">
								<img src="{{asset('uploads/'.$Data['lwwb'][$i]->cover.'')}}" alt=" " class="img-responsive">
							</div>
							<div class="col-xs-7 latest-news-grid-right">
								<p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
									<span>{{$Data['lwwb'][$i]->created_at}}</span>
								</p>
								<h4>
									<a class="trip-text" href="/lwwb/{{$Data['lwwb'][$i]->id}}">{{$Data['lwwb'][$i]->title}}</a>
								</h4>
								<p class="man">{{$Data['lwwb'][$i]->author}}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						@if(($i+1)%2==0)
							<div class="clearfix"> </div>
						@endif
					@endfor
				</div>
			</div>
		</div>
	</div>
	<!--//news-->
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">政策法规</h3>
			<div class="col-md-5 services-info">
				<h5>劳动关系是劳动者与用人单位之间依法建立起的一种权利与义务的关系。依照劳动关系认定原则进行的劳动关系认定结果直接影响者劳动的切身利益，所以劳动关系的认定对劳动者意义重大。</h5>
				<div class="services-grid">
					<div class="border">
						<img src="{{asset('images/index_zcfg.jpg')}}" height="300" width="300" alt=""/>
					</div>
				</div>
			</div>
			<div class="col-md-7 services-grids">
				@for($i=0; $i<count($Data['zcfg']); $i++)
					@if($i%2==0)
						<div class="services-grids-top">
					@endif
						<div class="col-md-6 service-box">
							<figure class="icon">
								@if(($i+1)%4==0)
								<span class="glyphicon glyphicon-plane"></span>
								@elseif(($i+1)%3==0)
								<span class="glyphicon glyphicon-picture"></span>
								@elseif(($i+1)%2==0)
								<span class="glyphicon glyphicon-home"></span>
								@else
								<span class="glyphicon glyphicon-heart"></span>
								@endif
							</figure>
							<h5>
								<a class="trip-text" href="/zcfg/{{$Data['zcfg'][$i]->id}}">{{$Data['zcfg'][$i]->title}}</a>
							</h5>
							<p>{{$Data['zcfg'][$i]->created_at}}</p>
						</div>

					@if(($i+1)%2==0)
						<div class="clearfix"> </div>
					@endif
					@if($i%2==0)
						</div>
					@endif
				@endfor


			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->
<!--banner-bottom-->
<div class="banner-bottom">
	<div class="container">
		<h3 class="title">党群工作建设</h3>
		<div class="banner-bottom-grids">
			@for($i=0; $i<count($Data['gzjs']); $i++)
				<div class="col-md-3 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">0.{{$i+1}}</p>
						<div class="banner-bottom-grid-rel-pos">
							<h4>
								<a class="trip-text" href="/gzjs/{{$Data['gzjs'][$i]->id}}">{{$Data['gzjs'][$i]->title}}</a>
							</h4>

							<p>{{$Data['gzjs'][$i]->author}}</p>
							<p>{{$Data['gzjs'][$i]->created_at}}</p>
						</div>
					</div>
				</div>
			@endfor
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//banner-bottom-->
<!--trip-->
<div class="trip">
	<div class="container">
		<h3 class="title">招聘信息</h3>
		<div class="trip-info">
			<div class="col-md-6 trip-left">
				<div class="grid_3 grid_5">
					<div class="alert alert-success" role="alert">
						<h4>
							<a class="trip-text" href="/zpxx/{{$Data['zpxx'][0]->id}}">{{$Data['zpxx'][0]->title}}</a>
						</h4>
						<p>{{$Data['zpxx'][0]->author}}</p>
						<p>{{$Data['zpxx'][0]->created_at}}</p>
					</div>
					<div class="alert alert-info" role="alert">
						<h4>
							<a class="trip-text" href="/zpxx/{{$Data['zpxx'][1]->id}}">{{$Data['zpxx'][1]->title}}</a>
						</h4>
						<p>{{$Data['zpxx'][1]->author}}</p>
						<p>{{$Data['zpxx'][1]->created_at}}</p>					</div>
					<div class="alert alert-warning" role="alert">
						<h4>
							<a class="trip-text" href="/fwdt/{{$Data['zpxx'][2]->id}}">{{$Data['zpxx'][2]->title}}</a>
						</h4>
						<p>{{$Data['zpxx'][2]->author}}</p>
						<p>{{$Data['zpxx'][2]->created_at}}</p>					</div>
					<div class="alert alert-danger" role="alert">
						<h4>
							<a class="trip-text" href="/zpxx/{{$Data['zpxx'][3]->id}}">{{$Data['zpxx'][3]->title}}</a>
						</h4>
						<p>{{$Data['zpxx'][3]->author}}</p>
						<p>{{$Data['zpxx'][3]->created_at}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 trip-right">
				<div class="border">
					<img src="{{asset('images/index_zpxx.jpg')}}" height="300" width="300" alt=""/>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//about-grid-->
	{{--<!--trip-->--}}
	{{--<div class="trip">--}}
		{{--<div class="container">--}}
			{{--<h3 class="title">招聘信息</h3>--}}
			{{--<div class="trip-info">--}}
				{{--<div class="trip-info">--}}
					{{--@for($i=0; $i<count($Data['rlzy']); $i++)--}}
						{{--<div class="col-md-2 trip-left">--}}
							{{--<h3>--}}
								{{--<a class="trip-text" href="/rlzy/{{$Data['rlzy'][$i]->id}}">{{$Data['rlzy'][$i]->title}}</a>--}}
							{{--</h3>--}}
							{{--<p>{{$Data['rlzy'][$i]->author}}</p>--}}
							{{--<img src="{{asset(''.$Data['rlzy'][$i]->cover.'')}}" height="100" width="100" alt=""/>--}}
						{{--</div>--}}
					{{--@endfor--}}
					{{--<div class="col-md-3 trip-right">--}}
						{{--<div class="border">--}}
							{{--<img src="{{asset('images/img1.jpg')}}" alt=""/>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="clearfix"> </div>--}}
				{{--</div>--}}

			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	{{--<!--banner-bottom-->--}}
	<div class="banner-bottom">
		<div class="container">
			<h3 class="title">服务动态</h3>
			<div class="banner-bottom-grids">
				@for($i=0; $i<count($Data['fwdt']); $i++)
					<div class="col-md-3 banner-bottom-grid">
						<div class="banner-bottom-grid-rel">
							<p class="welcome-bg-text">0.{{$i+1}}</p>
							<div class="banner-bottom-grid-rel-pos">
								<h4>
								<a class="trip-text" href="/fwdt/{{$Data['fwdt'][$i]->id}}">{{$Data['fwdt'][$i]->title}}</a>
								</h4>
								<p>{{$Data['fwdt'][$i]->author}}</p>
								<p>{{$Data['fwdt'][$i]->created_at}}</p>
							</div>
						</div>
					</div>
				@endfor
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//banner-bottom-->

	<div class="copyrights"></div>
	<!--trip-gallery-->
	<div class="trip-gallery">
		<div class="col-md-4 trip-grids">
			<div class="trip-grid-text">
				<h4>Mountains </h4>
				<p>Like Aldus PageMaker versions</p>
			</div>
		</div>
		<div class="col-md-4 trip-grids trip-grid2">
			<div class="trip-grid-text">
				<h4>Waterfalls</h4>
				<p>Like Aldus PageMaker versions</p>
			</div>
		</div>
		<div class="col-md-4 trip-grids trip-grid3">
			<div class="trip-grid-text">
				<h4>Hill Stations</h4>
				<p>Like Aldus PageMaker versions</p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//trip-gallery-->
@endsection
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
@section('scripts')
    <script src="{{asset('Front_js/bootstrap.js')}}"></script>
@endsection