
@extends('layouts.app')

@section('header')
    @parent
@endsection

@section('layerslider')
    @parent
@endsection

@section('content')
    <div id="content">
        <div class="home-intro"><!-- home intro starts -->
            <div class="container">

            </div>
        </div>
        <!--home intro ends-->
        <div class="container">
            <div class="one-third">
                <div class="feature-block"><!-- features blocks starts -->
                    <div class="feature-block-title">
                        <div class="feature-block-icon">
                            <a href="/about"><i class="icon-lightbulb"></i><span></span></a>
                        </div>
                        <h4><a href="/about">联系方式</a></h4>
                        <h6>电话 &amp; 地址</h6>
                    </div>
                    <ul class="sidebar-nav">
                        <li><a href="#" title="Some Title">
                                <i class="icon-female"></i>
                                联系人：朱女士
                            </a>
                        </li>
                        <li><a href="#" title="Some Title">
                                <i class="icon-phone"></i>
                                手&nbsp;&nbsp;&nbsp;&nbsp;机：{{$common_data['company']->telephone}}
                            </a>
                        </li>
                        <li><a href="#" title="Some Title">
                                <i class="icon-phone-sign"></i>
                                电&nbsp;&nbsp;&nbsp;&nbsp;话：{{$common_data['company']->phone}}
                            </a></li>
                        <li><a href="#" title="Some Title">
                                <i class="icon-archive"></i>
                                传&nbsp;&nbsp;&nbsp;&nbsp;真：{{$common_data['company']->telephone}}
                            </a></li>
                        <li><a href="#" title="Some Title">
                                <i class="icon-envelope"></i>
                                E-mail：{{$common_data['company']->mail}}
                            </a></li>
                        <li><a href="#" title="Some Title">
                                <i class="icon-globe"></i>
                                邮&nbsp;&nbsp;&nbsp;&nbsp;编：65000
                            </a>
                        </li>
                        <li><a href="#" title="Some Title">
                                <i class="icon-home"></i>
                                地&nbsp;&nbsp;&nbsp;&nbsp;址：{{$common_data['company']->address}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="one-third">
                <div class="feature-block">
                    <div class="feature-block-title">
                        <div class="feature-block-icon">
                            <a href="/company"><i class="icon-desktop"></i><span></span></a>
                        </div>
                        <h4><a href="/company">公司情况</a></h4>
                        <h6>公司简介</h6>
                    </div>
                    <p>
                        <span class="dropcap gray">云</span>南悦齐劳务有限公司是云南省劳动人事就业部门隶属、监管单位，由云南省工商行政管理局批准成立，经云南省劳动和社会保障局认定，具有独立法人资格的劳务派遣公司注册，资本200万元。我公司始终秉承“以人为本，客户至上，锐意进取，追求卓越”的经营理念，坚持“专业化管理、规范化服务、职业化培训”的服务宗旨，在用工单位和劳动者之间架起了一座便捷、高效的服务桥梁，帮助用工单位规范用工，保障员工合法权益。
                        <a href="/company" style="float: right; color: #0f79bb">详细信息</a>
                    </p>
                </div>
            </div>
            <div class="one-third">
                <div class="feature-block">
                    <div class="feature-block-title">
                        <div class="feature-block-icon">
                            <a href="/zxzx"><i class="icon-cog"></i><span></span></a>
                        </div>
                        <h4><a href="/zxzx">资讯中心</a></h4>
                        <h6>公司 &amp; 行业信息</h6>
                    </div>
                    <ul class="accordion">
                        @foreach($zxzxs as $zxzx)
                        <li class="accordion-item">
                            <div class="accordion-switch">
                                <span class="togglegfx"></span>{{$zxzx->title}}
                            </div>
                            <div class="accordion-content">
                                <p>{{$zxzx->content}}</p>
                                <p><a href="/zxzx/{{$zxzx->id}}">详细信息</a></p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--features block ends-->
        </div>
        <div class="intro-features"><!-- intro features panel starts -->
            <div class="container">
                <h4>经典案例</h4>
                <div class="slidewrap">
                    <!--project carousel starts-->
                    @if(count($jdals)>4)
                    <ul class="slider" id="sliderName">
                        <li class="slide"><!-- carousel item starts -->
                            @for($i=0; $i<4; $i++)
                            <div class="one-fourth">
                                <div class="item-wrapp">
                                    <div class="portfolio-item">
                                        <a href="/jdal/{{$jdals[$i]->id}}" class="item-permalink"><i class="icon-link"></i></a>
                                        <a href="{{asset('uploads/'.$jdals[$i]->cover.'')}}" data-rel="prettyPhoto" class="item-preview"><i class="icon-zoom-in"></i></a>
                                        <img src="{{asset('uploads/'.$jdals[$i]->cover.'')}}" alt=""/>
                                    </div>
                                    <div class="portfolio-item-title">
                                        <a href="/jdal/{{$jdals[$i]->id}}">{{$jdals[$i]->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </li>
                        <li class="slide"><!-- carousel item starts -->
                            @for($i; $i<count($jdals); $i++)
                                <div class="one-fourth">
                                    <div class="item-wrapp">
                                        <div class="portfolio-item">
                                            <a href="/jdal/{{$jdals[$i]->id}}" class="item-permalink"><i class="icon-link"></i></a>
                                            <a href="{{asset('uploads/'.$jdals[$i]->cover.'')}}" data-rel="prettyPhoto" class="item-preview"><i class="icon-zoom-in"></i></a>
                                            <img src="{{asset('uploads/'.$jdals[$i]->cover.'')}}" alt=""/>
                                        </div>
                                        <div class="portfolio-item-title">
                                            <a href="/jdal/{{$jdals[$i]->id}}">{{$jdals[$i]->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </li>
                    </ul><!-- carousel items UL ends -->
                    <ul class="slidecontrols">
                        <li><a href="#sliderName" class="prev">Prev</a></li>
                        <li><a href="#sliderName" class="next">Next</a></li>
                    </ul>
                    @else
                    <ul class="slider" id="sliderName">
                            <li class="slide"><!-- carousel item starts -->
                                @for($i=0; $i<count($jdals); $i++)
                                    <div class="one-fourth">
                                        <div class="item-wrapp">
                                            <div class="portfolio-item">
                                                <a href="/jdal/{{$jdals[$i]->id}}" class="item-permalink"><i class="icon-link"></i></a>
                                                <a href="{{asset('uploads/'.$jdals[$i]->cover.'')}}" data-rel="prettyPhoto" class="item-preview"><i class="icon-zoom-in"></i></a>
                                                <img src="{{asset('uploads/'.$jdals[$i]->cover.'')}}" alt=""/>
                                            </div>
                                            <div class="portfolio-item-title">
                                                <a href="/jdal/{{$jdals[$i]->id}}">{{$jdals[$i]->title}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </li>
                        </ul><!-- carousel items UL ends -->
                    @endif
                </div>
            </div>
        </div><!-- intro features panel ends -->
        {{--<div class=" clients-wrapp">--}}
            {{--<div class="container">--}}
                {{--<br/>--}}
                {{--<br/>--}}
                {{--<h4>公司活动</h4>--}}
                {{--<div class="flexslider clients-slider "><!-- flex slider starts -->--}}
                    {{--<ul class="slides client-block">--}}

                        {{--<li>--}}
                            {{--@for($j=0; $j<count($gshds); $j++)--}}
                            {{--<div class="one-fifth">--}}
                                {{--<a href="#" class="tooltip" title="Some Clients Name"><img src="{{asset('/uploads/ActivePic/'.$gshds[$j])}}" alt=""/></a>--}}
                            {{--</div>--}}
                            {{--@endfor--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div><!-- flex slider ends -->--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection

@section('footer')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('copyright')
    @parent
@show