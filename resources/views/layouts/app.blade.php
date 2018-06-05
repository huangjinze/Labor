<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{$company->name}}</title>
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
    @yield('css')
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

</head>
<body>
@section('sidebar')
    <nav class="open">
        <a href="/" id="menuToggle"> <span class="navClosed"></span> </a>
        <a href="/">首页</a>
        <a href="/company">公司简介</a>
        <a href="/lwpq">劳务派遣</a>
        <a href="/rlzy">人力资源服务</a>
        <a href="/lwwb">劳务外包</a>
        <a href="/zcfg">政策法规</a>
        <a href="/gzjs">党群工作建设</a>
        <a href="/zpxx">招聘信息</a>
        <a href="/fwdt">服务动态</a>
        <a href="/zlxz">资料下载</a>
        <a href="#contact-us" class="scroll">联系我们</a>
        <a href="/admin">登录</a>
    </nav>
    <script>
        (function($){
            // Menu Functions
            $(document).ready(function(){
                $('#menuToggle').click(function(e){
                    var $parent = $(this).parent('nav');
                    $parent.toggleClass("open");
                    var navState = $parent.hasClass('open') ? "hide" : "show";
                    $(this).attr("title", navState + " navigation");
                    // Set the timeout to the animation length in the CSS.
                    setTimeout(function(){
                        console.log("timeout set");
                        $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                    }, 200);
                    e.preventDefault();
                });
            });
        })(jQuery);
    </script>
@show


@yield('header')


@yield('content')

@yield('scripts')

@section('footer')
    <div class="footer" id="contact-us">
        <div class="container">
            <div class="col-md-4 footer-grids">
                <h3>公司二维码</h3>
                <img src="{{asset('uploads/'.$company->image.'')}}" height="200px" width="200px" alt=""/>
            </div>
            <div class="col-md-2 footer-grids">
                <h3>联系我们</h3>
                <p>
                    <span>座机电话: {{$company->phone}}</span>
                    <span>办公电话: {{$company->telephone}}</span>
                    <span>邮箱: <a href="mailto:info@example.com">{{$company->mail}}</a></span>
                </p>
            </div>
            <div class="col-md-3 footer-grids">
                <h3>公司地址</h3>
                <p>{{$company->address}}<br></p>
                <div class="footer-bottom">
                    <h3>{{$company->charger}} 女士</h3>
                </div>
            </div>
            <div class="col-md-3 footer-grids">
                <h3>友情链接</h3>
                <a href="http://www.mohrss.gov.cn/">中华人民共和国人力资源和社会保障网</a><br><br>
                <a href="http://www.ynhrss.gov.cn/">云南省人力资源和社会保障网</a><br><br>
                <a href="http://rsj.km.gov.cn/">昆明市人力资源和社会保障网</a><br><br>
                <a href="http://pl.km.gov.cn/qsbmsz/qzfgbm/qrsj/">盘龙区人力资源和社会保障局</a><br><br>
            </div>
            <div class="clearfix"> </div>
            <div class="footer-copy">
                <p>Copyright &copy; 2018<a href="http://www.cssmoban.com/" target="_blank" title="模板之家">京公网安备11000002000001号</a></p>
            </div>
        </div>
    </div>
@show
</body>
</html>