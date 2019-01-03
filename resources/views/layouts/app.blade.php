<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{$common_data['company']->name}}</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{assert('images/favicon.gif')}}"/>
    <link rel="stylesheet" href="{{asset('Front_css/style.css')}}" media="screen"/><!-- MAIN STYLE CSS FILE -->
    <link rel="stylesheet" href="{{asset('Front_css/responsive.css')}}" media="screen"/><!-- RESPONSIVE CSS FILE -->
    <link rel="stylesheet" id="style-color" href="{{asset('Front_css/colors/blue-color.css')}}" media="screen"/><!-- DEFAULT BLUE COLOR CSS FILE -->
    <link rel="stylesheet" href="{{asset('Front_css/prettyPhoto.css')}}" media="screen"/><!--PRETTYPHOTO CSS FILE -->
    <link rel="stylesheet" href="{{asset('Front_css/font-awesome/font-awesome.min.css')}}" media="screen"/><!-- FONT AWESOME ICONS CSS FILE -->
    <link rel="stylesheet" href="{{asset('Front_css/layer-slider.css')}}" media="screen"/><!-- LAYER SLIDER CSS FILE -->
    <link rel="stylesheet" href="{{asset('Front_css/flexslider.css')}}" media="screen"/><!-- FLEX SLIDER CSS FILE -->
    <link rel="stylesheet" href="{{asset('Front_css/revolution-slider.css')}}" media="screen"/><!-- REVOLUTION SLIDER CSS FILE -->
    @yield('css')

    <!-- All JavaScript Files (FOR FASTER LOADING OF YOUR SITE, REMOVE ALL JS PLUGINS YOU WILL NOT USE)-->
    <script type="text/javascript" src="{{asset('Front_js/jquery.min.js')}}"></script><!-- JQUERY JS FILE -->
    <script>
        function showCompanyName(){
            if(jQuery(window).width()<720){
                jQuery("#logo").append("<img src=\"{{asset('images/companyNameMoblie.png')}}\" alt=\"\"/>")
            }
            else{
                jQuery("#logo").append("<img src=\"{{asset('images/companyName.png')}}\" alt=\"\"/>")
            }
        }
    </script>
    <script type="text/javascript" src="{{asset('Front_js/jquery-ui.js')}}"></script><!-- JQUERY UI JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/flex-slider.min.js')}}"></script><!-- FLEX SLIDER JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/navigation.min.js')}}"></script><!-- MAIN NAVIGATION JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.layerslider.js')}}"></script><!-- LAYER SLIDER JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/layerslider.transitions.js')}}"></script><!-- LAYER SLIDER TRANSITIONS JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/carousel.js')}}"></script><!-- CAROUSEL SLIDER JS -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.theme.plugins.min.js')}}"></script><!-- REVOLUTION SLIDER PLUGINS JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.themepunch.revolution.min.js')}}"></script><!-- REVOLUTION SLIDER JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/flickr.js')}}"></script><!-- FLICKR WIDGET JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/instagram.js')}}"></script><!-- INSTAGRAM WIDGET JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.twitter.js')}}"></script><!--TWITTER WIDGET JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/prettyPhoto.min.js')}}"></script><!-- PRETTYPHOTO JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.tooltips.min.js')}}"></script><!-- TOOLTIPS JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/isotope.min.js')}}"></script><!--ISOTOPE JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/scrolltopcontrol.js')}}"></script><!-- SCROLL TO TOP JS PLUGIN -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.easy-pie-chart.js')}}"></script><!-- EASY PIE JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/jquery.transit.min.js')}}"></script><!-- TRANSITION JS FILE -->
    <script type="text/javascript" src="{{asset('Front_js/custom.js')}}"></script><!-- CUSTOM JAVASCRIPT JS FILE -->
    @yield('JavaScript')


</head>

<body>
<div id="container">
    <!-- main container starts-->
    <div id="wrapp">
        @section('header')
            <!-- main wrapp starts-->
            <header id="header">
                    <!--header starts -->
                    <div id="header-links">

                    </div>
                    <div class="container">
                        <div class="head-wrapp" style="width: 130%">
                            <a href="/" id="logo">
                                {{--<span>Responsive Business Template</span>--}}
                            </a>
                            <script>
                                jQuery(function () {
                                    showCompanyName();

                                    jQuery(function () {
                                        //当调整浏览器窗口的大小时，发生 resize 事件
                                        jQuery(window).resize(function(){
                                            jQuery("#logo img").remove();
                                            showCompanyName();
                                        })
                                    })
                                })
                            </script>

                            <!--your logo-->
                            <a href="/" id="imageInfo" style="float: right;">
                                <img src="{{asset('images/contactinfo.png')}}" alt=""/>
                            </a>
                            
                            <nav class="top-search" style="margin-right: 6%">
                                <!-- search starts-->
                                <form action="404-error.html" method="get">
                                    <button class="search-btn"></button>
                                    <input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search"/>
                                </form>
                            </nav>
                            <!--search ends -->

                        </div>
                    </div>
                    <div id="main-navigation">
                        <!--main navigation wrapper starts -->
                        <div class="container">
                            <ul class="main-menu">
                                <li>
                                    <a href="/"> 网站首页</a>
                                </li>
                                <li>
                                    <a href="/company"> 公司简介</a>
                                </li>

                                <li><a href="/zxzx"> 资讯中心</a>
                                    <!-- Second Level / Start -->
                                    <ul>
                                        <li><a href="/zxzx?type=公司新闻">公司新闻</a></li>
                                        <li><a href="/zxzx?type=行业新闻">行业新闻</a></li>
                                    </ul>
                                    <!-- Second Level / End -->
                                </li>
                                <li>
                                    <a href="/fwxm"> 服务项目</a>
                                </li>
                                <!-- Second Level / End -->
                                <li>
                                    <a href="/jdal"> 经典案例</a>
                                </li>
                                <li>
                                    <a href="/qyzz"> 企业资质</a>
                                </li>
                                <li>
                                    <a href="/dqjs#"> 党群建设</a>
                                </li>

                                <li>
                                    <a href="/qyzp"> 企业招聘</a>
                                </li>
                                <li>
                                    <a href="/about"> 联系我们</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--main navigation wrapper ends -->
                </header>
            <!-- header ends-->
        @show

        @section('layerslider')
            <div class="revolution-slider">
                    <div class="fullwidthbanner-container">
                        <div class="fullwidthbanner">
                            <ul>
                                @for($i=0; $i<$common_data['picture_num']; $i++)
                                    <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                        <img src="{{asset('uploads/HomePage/bg'.($i+1).'.jpg')}}" alt="slide" data-fullwidthcentering="true">
                                    </li>
                                @endfor

                                {{--<li data-transition="random" data-slotamount="7" data-masterspeed="1000">--}}
                                    {{--<img src="{{asset('images/slider/revolution/2/bg.jpg')}}" alt="slide" data-fullwidthcentering="true">--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            <!--layer slider ends-->
        @show



        @yield('content')


        @section('footer')
            <section class="footer-call-to-action" style="padding: 10px 0 10px 0;"><!-- footer call to action starts -->
                <section class="container" style="text-align: center">
                    <a href="/" class="button small round color-alt"><i class="icon-windows left"></i>网站首页</a>
                    <a href="/company" class="button small round color-alt"><i class="icon-file-text left"></i>公司简介</a>
                    <a href="/zxzx" class="button small round color-alt"><i class="icon-question left"></i>咨询中心</a>
                    <a href="/fwxm" class="button small round color-alt"><i class="icon-list-ol left"></i>服务项目</a>
                    <a href="/jdal" class="button small round color-alt"><i class="icon-check-sign left"></i>经典案例</a>
                    <a href="/qyzz" class="button small round color-alt"><i class="icon-bullhorn left"></i>企业资质</a>
                    <a href="/dqjs" class="button small round color-alt"><i class="icon-flag left"></i>党群建设</a>
                    <a href="/qyzp" class="button small round color-alt"><i class="icon-smile left"></i>企业招聘</a>
                </section>
            </section><!-- footer call to action ends -->
            <footer id="footer"><!--footer starts -->
                <section class="container">
                    <section class="one-third">
                        {{--<h4>Twitter Feeds</h4>--}}
                        {{--<ul class="twitter-feeds">--}}
                            {{--<!-- twitter widget starts-->--}}
                        {{--</ul>--}}
                        {{--<!-- twitter widget ends-->--}}
                        {{--<p>--}}
                            {{--<a href="#">Follow Me on Twitter</a>--}}
                        {{--</p>--}}
                    </section>
                    <section class="one-third">
                        <h4>友情链接</h4>
                        <ul>
                            <!-- latest posts widget starts-->
                            <li><a href="http://www.mohrss.gov.cn/">中华人民共和国人力资源和社会保障网</a></li>
                            <li><a href="http://www.ynhrss.gov.cn/">云南省人力资源和社会保障网</a></li>
                            <li><a href="http://rsj.km.gov.cn/">昆明市人力资源和社会保障网</a></li>
                            <li><a href="http://pl.km.gov.cn/qsbmsz/qzfgbm/qrsj/">盘龙区人力资源和社会保障局</a></li>
                        </ul>
                        <!-- lastest posts widget ends-->
                    </section>
                    {{--<section class="one-third">--}}
                        {{--<h4>Flickr Photos</h4>--}}
                        {{--<div class="flickr-widget">--}}
                            {{--<!-- flickr widget starts-->--}}
                        {{--</div>--}}
                    {{--</section>--}}
                </section>
            </footer>
        @show

        @section('copyright')
            <section id="copyrights">
                <section class="container">
                    <div class="one-half">
                        <p>
                            Copyright &copy;
                            <a href="http://www.yqlwyn.com/" target="_blank">云南悦齐劳务有限公司</a>
                        </p>
                    </div>
                    <div class="one-half">
                        <ul class="copyright_links">
                            <li><a href="/" title="Home">主页</a></li>
                            <li><a href="/about" title="About">关于我们</a></li>
                        </ul>
                    </div>
                </section>
            </section>
        @show
    </div>
    <!-- main wrapp starts-->
</div>
<!-- main container ends-->

</body>
</html>
