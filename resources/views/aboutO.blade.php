@extends('layouts.app')

@section('sidebar')
@parent
@endsection

@section('content')

	<!--banner-->
	<div class="banner">
		<div class="banner-left about-banner-left">
			<div class="logo">
				<h1><a href="/">Expedition</a></h1>
				<h6>A WIDE RANGE OF LOCATIONS</h6>
				<h2>WE OFFER THE BEST VACATION OF OUR LIFE !</h2>
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
	<div class="about">
		<div class="container">
			<h3 class="title">About Us</h3>
			<div class="about-info">
				<div class="col-md-8 about-grids">
					<h4>Blanditiis praesentium deleniti atque corrupti quos </h4>
					<p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat officia deserunt mollitia laborum et dolorum fuga. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat </p>		
					<div class="about-row">
						<div class="col-md-4 about-imgs">
							<img src="images/img9.jpg" alt="" class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-imgs">
							<img src="images/img10.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="col-md-4 about-imgs">
							<img src="images/img11.jpg" alt=""  class="img-responsive zoom-img"/>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 about-grids">
					<h4>Our Advantages</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>01</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere placerat. Phasellus eget mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>02</h5>
						</div>
						<div class="pince-right">
							<p>Dero vulputate enim non justo posuere placerat. purus vel mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>03</h5>
						</div>
						<div class="pince-right">
							<p>Justo posuere placerat. Vero vulputate enim non  Phasellus eget mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>04</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere placerat. purus vel mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-->
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="title">Testimonials</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="testimonials-grid">
								<div class="testimonials-grid-left1">
									<img src="images/t1.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="testimonials-grid-right1">
									<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Ut enim ad minim veniam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<div class="testimonials-grid-left1">
									<img src="images/t2.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="testimonials-grid-right1">
									<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Ut enim ad minim veniam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="testimonials-grid">
								<div class="testimonials-grid-left1">
									<img src="images/t3.jpg" alt="" class="img-responsive" />
								</div>
								<div class="testimonials-grid-right1">
									<p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Ut enim ad minim veniam.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
					</ul>
				</div>
			</section>
				<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!--End-slider-script-->
		</div>
	</div>
	<!-- //testimonials -->
	<!-- testimonials -->
	<div class="about-bottom">
		<div class="container">
			<div class="about-bottom-info">
				<div class="col-md-5 history">
					<h3 class="title">Our History</h3>
					<div class="banner-bottom-video-grid-left">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											2013-2016
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											2011-2013
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											2009-2011
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											2007-2009
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 team">
					<!--team-->
					<div class="team">
						<h3 class="title">Meet Our Team</h3>
						<!-- flex-slider -->
						<div class="work-bottom">	
							<ul>
								<li>
									<div class="team-left">
										<img src="images/t4.jpg" alt="">
										<div class="team-bottom">
											<h4>Mark Simmy</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-left">
										<img src="images/t5.jpg" alt="">
										<div class="team-bottom">
											<h4>Mark Simmy</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
								<li>
									<div class="team-left">
										<img src="images/t6.jpg" alt="">
										<div class="team-bottom">
											<h4>Alan Smith</h4>
											<p>Fusce et nibh eget odio cursus consectetur</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>	
					<!--//team-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--footer-->
@endsection
		<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@section('scripts')
	<script src="{{asset('Front_js/bootstrap.js')}}"></script>
@endsection