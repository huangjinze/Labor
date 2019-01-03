@extends('layouts.app')

@section('css')
	@parent
	{{--	<link rel="stylesheet" href="{{asset('Front_css/flexslider.css')}}" type="text/css" media="screen" />--}}
@endsection

@section('sidebar')
	@parent
@endsection
		<!-- Latest compiled and minified Locales -->
<!-- Latest compiled and minified Locales -->
<script src="{{asset('Front_js/jquery-1.11.1.min.js')}}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
<!-- Latest compiled and minified Locales -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-zh-CN.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
@section('header')
	<div class="testimonials" style="background: url('{{asset('images/zlxz-header.jpg')}}') no-repeat 0px 0px fixed;">
		<div class="container">
			<h3 class="title" style="color: saddlebrown;">资料下载</h3>
		</div>
	</div>
@endsection

@section('content')
	<div class="container-fluid" >



		<div class="row" >
			<div class="col-xs-1 col-sm-1">
			</div>
			<div class="col-xs-10 col-sm-10">
				<table
                        data-toggle="table"
                        data-search="true"
                        data-striped="true"
                        data-pagination="true"
                        data-side-pagination="client"
                >
					<thead>
					<tr>
						<th data-sortable="true" style="font-size: larger">文件名称</th>
						<th data-sortable="true">日期</th>
						<th data-sortable="true">大小</th>
						<th data-sortable="false">操作</th>
					</tr>
					</thead>
					<tbody>
					{{-- 所有文件 --}}
					@foreach ($files as $file)
						<tr>
							<td>
								@if (is_image($file['mimeType']))
									<i class="fa fa-file-image-o fa-lg fa-fw"></i>
								@else
									<i class="fa fa-file-o fa-lg fa-fw"></i>
								@endif
								{{ $file['name'] }}
							</td>
							<td>{{ $file['modified']->format('Y-m-d h:i:s') }}</td>
							<td>{{ human_filesize($file['size']) }}</td>
							<td>
								<a type="button" class="btn btn-sm btn-success" href="/insight/{{ $file['name'] }}">
									<i class="fa fa-times-circle fa-lg"></i>
									预览
								</a>
								<a type="button" class="btn btn-sm btn-danger" href="/download/{{ $file['name'] }}">
									<i class="fa fa-times-circle fa-lg"></i>
									下载
								</a>
							</td>
						</tr>
					@endforeach

					</tbody>
				</table>
			</div>
			<div class="col-xs-1 col-sm-1">
			</div>
		</div>
	</div>

@stop
