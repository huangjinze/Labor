<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>应用名称 - @yield('title')</title>
    <!--mobile apps-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Expedition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//mobile apps-->
    <!--Custom Theme files-->
    <link href="{{asset('Front_css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('Front_css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="{{asset('Front_js/jquery-1.11.1.min.js')}}"></script>
    <!-- //js -->
    <!--web-fonts-->
    <link href='https://fonts.googleapis.com/css?family=Nova+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
    <!-- start-smooth-scrolling-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
    @yield('css')
</head>
<body>
@section('sidebar')
    <nav class="open">
        <a href="/" id="menuToggle"></a>
        <a href="/">首页</a>
        <a href="/about">公司简介</a>
        <a href="typo.html">劳务派遣</a>
        <a href="#news" class="scroll">人力资源服务</a>
        <a href="gallery.html">劳务外包</a>
        <a href="contact.html">政策法规</a>
        <a href="contact.html">党群工作建设</a>
        <a href="contact.html">招聘信息</a>
        <a href="contact.html">服务动态</a>
        <a href="contact.html">资料下载</a>
        <a href="#contact-us" class="scroll">联系我们</a>
    </nav>
@show

@yield('content')

@yield('scripts')

@section('footer')
    <div class="footer" id="contact-us">
        <div class="container">
            <div class="col-md-4 footer-grids">
                <h3>Review</h3>
                <p>As opposed to using 'Content here, making it look like readable English. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of content here',  Lorem Ipsum The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
            </div>
            <div class="col-md-3 footer-grids">
                <h3>Contact Me</h3>
                <p>123 NewYork City USA.<br>
                    <span>Office: 908-0000</span>
                    <span>Support to: <a href="mailto:info@example.com">mail@example.com</a></span>
                </p>
                <div class="footer-bottom">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><img src="images/f1.png" alt=""> FACEBOOK</a></li>
                        <li><a href="#"><img src="images/f2.png" alt=""> GOOGLE+</a></li>
                        <li><a href="#"><img src="images/f3.png" alt=""> LINKEDIN</a></li>
                        <li><a href="#"><img src="images/f4.png" alt=""> TWITTER</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 footer-grids">
                <h3>Subscribe</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                <form>
                    <input type="text" placeholder="Enter your email" required="">
                    <input type="submit" value="">
                </form>
                <div class="footer-bottom">
                    <h3>Flickr</h3>
                    <a  class="footer-img" href="#"> <img src="images/img7.jpg" alt=""/></a>
                    <a class="footer-img" href="#"> <img src="images/img1.jpg" alt=""/></a>
                    <a class="footer-img" href="#"> <img src="images/img8.jpg" alt=""/></a>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="footer-copy">
                <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
            </div>
        </div>
    </div>
@show
</body>
</html>