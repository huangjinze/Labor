
@extends('layouts.app')

@section('header')
	@parent
@endsection

@section('JavaScript')
    <script type="text/javascript" src="http://api.map.baidu.com/getscript?v=2.0&ak=AI8oThDcKfw9wtZGiL0lf4TP5A1d4FtZ&services=&t=20180917142401"></script>
@endsection

@section('layerslider')
	@parent
@endsection

@section('content')
	<div id="content">
		<div id="breadcrumb"><!-- breadcrumb starts-->
			<div class="container">
			</div>
		</div><!--breadcrumbs ends -->
		<div class="container">
			<div class="one-fourth sidebar right">
                @include('layouts.introduce-side')
                @include('layouts.contact-way-side')
			</div>
			<div class="three-fourth">
				<h4>{{$common_data['company']->name}}</h4>
                <p>
                    联系人：朱女士
                </p>
				<p>
                    电&nbsp;&nbsp;&nbsp;&nbsp;话：{{$common_data['company']->phone}}
                </p>
				<p>
                    地&nbsp;&nbsp;&nbsp;&nbsp;址：{{$common_data['company']->address}}
				</p>

                <div id="map-container" style="height: 300px; width: 500px;"></div>
                <script>
                    var map = new BMap.Map("map-container");
                    var point = new BMap.Point(102.712021,25.00007);
                    map.centerAndZoom(point, 20);
                    map.setZoom(16);
                    map.enableScrollWheelZoom(true);
                    var marker = new BMap.Marker(point);        // 创建标注
                    map.addOverlay(marker);                     // 将标注添加到地图中
                    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

                </script>
            </div>
		</div>
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