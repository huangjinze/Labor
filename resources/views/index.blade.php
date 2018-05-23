@extends('layouts.app')

@section('sidebar')
	@parent
@endsection

@section('content')

	<!--banner-->
	<div class="banner" id="home">
		<div class="banner-left">
			<div class="logo">
				<h1><a href="index.html">Expedition</a></h1>
				<h6>A WIDE RANGE OF LOCATIONS</h6>
				<h2>WE OFFER THE BEST VACATION OF OUR LIFE !</h2>
				<div class="address">
					<p>255 West W Street, Hershey</p>
					<p>PA 17033, United States</p>
					<p>E-mail: <a href="mailto:info@example.com">mail@example.com</a></p>
					<p class="phn"><span class="glyphicon glyphicon-earphone"></span>0000-111-111</p>
				</div>
				<a class="book hvr-outline-out" href="#"> Book Now !</a>
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
				{{--<nav class="open">--}}
					{{--<a href="" id="menuToggle"></a>--}}
					{{--<a href="#home" class="active scroll">首页</a>--}}
					{{--<a href="about.html">公司简介</a>--}}
					{{--<a href="typo.html">劳务派遣</a>--}}
					{{--<a href="#news" class="scroll">人力资源服务</a>--}}
					{{--<a href="gallery.html">劳务外包</a>--}}
					{{--<a href="contact.html">政策法规</a>--}}
					{{--<a href="contact.html">党群工作建设</a>--}}
					{{--<a href="contact.html">招聘信息</a>--}}
					{{--<a href="contact.html">服务动态</a>--}}
					{{--<a href="contact.html">资料下载</a>--}}
					{{--<a href="contact.html">联系我们</a>--}}
				{{--</nav>--}}
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="title">Welcome !</h3>
			<div class="banner-bottom-grids">
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">01.</p>
						<div class="banner-bottom-grid-rel-pos">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
								voluptatibus maiores alias consequatur aut perferendis doloribus 
								asperiores repellat.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">02.</p>
						<div class="banner-bottom-grid-rel-pos">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
								voluptatibus maiores alias consequatur aut perferendis doloribus 
								asperiores repellat.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 banner-bottom-grid">
					<div class="banner-bottom-grid-rel">
						<p class="welcome-bg-text">03.</p>
						<div class="banner-bottom-grid-rel-pos">
							<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
								voluptatibus maiores alias consequatur aut perferendis doloribus 
								asperiores repellat.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--trip-->
	<div class="trip">
		<div class="container">	
			<h3 class="title">My Trip</h3>
			<div class="trip-info">
				<div class="col-md-6 trip-left">
					<p class="trip-text">Lorem Ipsum is that it has a more-or-less normal distribution of making it look like letters.</p>
					<p>As opposed to using 'Content here, making it look like readable English. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
						software like Aldus PageMaker including versions of content here',  Lorem Ipsum The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
				</div>
				<div class="col-md-6 trip-right">
					<div class="border">
						<img src="images/img1.jpg" alt=""/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-grid-->
	<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
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
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">Our Services</h3>
			<div class="col-md-5 services-info">
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros ut convallis felis consectetur ut </h5>
				<div class="services-grid">
					<div class="border">
						<img src="images/img2.jpg" alt=""/>
					</div>
				</div>
			</div>
			<div class="col-md-7 services-grids">
				<div class="services-grids-top">
					<div class="col-md-6 service-box">
						<figure class="icon">
							<span class="glyphicon glyphicon-plane"></span>
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusa.</p>
					</div>
					<div class="col-md-6 service-box">
						<figure class="icon">
							<span class="glyphicon glyphicon-picture"></span>
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusa.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-grids-top">
					<div class="col-md-6 service-box">
						<figure class="icon">
							<span class="glyphicon glyphicon-heart"></span>
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusa.</p>
					</div>
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<span class="glyphicon glyphicon-home"></span>
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusa.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //services -->
	<!--news-->
	<div class="news-events" id="news">
		<div class="container">
			<h3 class="title">News &amp; Events</h3>
			<div class="latest-news">
				<div class="latest-news-grids">
					<div class="col-md-6 latest-news-grid">
						<div class="col-xs-5 latest-news-grid-left">
							<img src="images/img3.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-xs-7 latest-news-grid-right">
							<p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span>January 2nd 2016</span></p>
							<h4><a href="#">Fugiat quo voluptas</a></h4>
							<p class="man">Lorem Ipsum passages and more recently with desktop publishings.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 latest-news-grid">
						<div class="col-xs-5 latest-news-grid-left">
							<img src="images/img4.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-xs-7 latest-news-grid-right">
							<p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span>January 10th 2016</span></p>
							<h4><a href="#">Voluptas fugiat quo </a></h4>
							<p class="man">Lorem Ipsum passages and more recently with desktop publishings.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latest-news-grids">
					<div class="col-md-6 latest-news-grid">
						<div class="col-xs-5 latest-news-grid-left">
							<img src="images/img5.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-xs-7 latest-news-grid-right">
							<p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span>January 15th 2016</span></p>
							<h4><a href="#">Quo fugiat voluptas</a></h4>
							<p class="man">Lorem Ipsum passages and more recently with desktop publishings.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 latest-news-grid">
						<div class="col-xs-5 latest-news-grid-left">
							<img src="images/img6.jpg" alt=" " class="img-responsive">
						</div>
						<div class="col-xs-7 latest-news-grid-right">
							<p><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span>February 2nd 2016</span></p>
							<h4><a href="#">Fugiat quo voluptas</a></h4>
							<p class="man">Lorem Ipsum passages and more recently with desktop publishings.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
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