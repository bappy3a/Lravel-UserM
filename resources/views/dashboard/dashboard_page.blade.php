@extends('layouts.template')
@section('content')
<div class="page-content padding-20 container-fluid">
<style>
@media screen and (max-width: 1200px) {
    .clearbothsub{
	clear:both !important;
	}
	.clearbothmain{
	width:100% !important;
	}
}
canvas{
        width: 95% !important;
        max-width: 100%;
        height: auto !important;
    }
</style>
<!------------------------------ Start Alert message--------------->
<div class="alert alert-primary alert-dismissible alertDismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
  </button>
Welcome  {{Auth::user()->first_name}} {{Auth::user()->last_name}} !
</div>
<!-------------------------------- End alert message--------------->
				
<!-------------------------------- Start first step graph--------------->
<div class="row" data-plugin="matchHeight" data-by-row="true">
<!-- First Row -->
<div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
  <div class="widget widget-shadow">
	<div class="widget-content bg-white padding-20">
	  <button type="button" class="btn btn-floating btn-sm btn-primary">
		<i class="icon wb-users" aria-hidden="true"></i>
	  </button>
	  <span class="margin-left-15 font-weight-400 example-title">{{ trans('app.total_users')}}</span>
	  <div class="content-text text-center margin-bottom-0">
		<i class="text-danger icon wb-triangle-up font-size-20">
				  </i>
		<span class="font-size-40 font-weight-100">{{$totaluser}}</span>
		<p class="blue-grey-400 font-weight-100 margin-0">{{ trans('app.total_redistered_users')}}</p>
	  </div>
	</div>
  </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
  <div class="widget widget-shadow">
	<div class="widget-content bg-white padding-20">
	  <button type="button" class="btn btn-floating btn-sm btn-primary">
		<i class="icon wb-user-add" aria-hidden="true"></i>
	  </button>
	  <span class="margin-left-15 font-weight-400 example-title"> {{ trans('app.new_users')}}</span>
	  <div class="content-text text-center margin-bottom-0">
		<i class="text-danger icon wb-triangle-up font-size-20">
				  </i>
		<span class="font-size-40 font-weight-100">{{$newuser}}</span>
		<p class="blue-grey-400 font-weight-100 margin-0">{{ trans('app.new_users_this_month')}}</p>
	  </div>
	</div>
  </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
  <div class="widget widget-shadow">
	<div class="widget-content bg-white padding-20">
	  <button type="button" class="btn btn-floating btn-sm btn-primary">
		<i class="icon wb-eye"></i>
	  </button>
	  <span class="margin-left-15 font-weight-400 example-title">{{ trans('app.visitors')}}</span>
	  <div class="content-text text-center margin-bottom-0">
		<i class="text-danger icon wb-triangle-up font-size-20">
				  </i>
		<span class="font-size-40 font-weight-100">{{$monthvisitor}}</span>
		<p class="blue-grey-400 font-weight-100 margin-0">{{ trans('app.this_month_visitors')}}</p>
	  </div>
	</div>
  </div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
  <div class="widget widget-shadow">
	<div class="widget-content bg-white padding-20">
	  <button type="button" class="btn btn-floating btn-sm btn-primary">
		<i class="icon wb-calendar" aria-hidden="true"></i>
	  </button>
	  <span class="margin-left-15 font-weight-400 example-title">{{ trans('app.visitors')}}</span>
	  <div class="content-text text-center margin-bottom-0">
		<i class="text-danger icon wb-triangle-up font-size-20">
				  </i>
		<span class="font-size-40 font-weight-100">{{$todayvisitor}}</span>
		<p class="blue-grey-400 font-weight-100 margin-0">{{ trans('app.today_visitors')}}</p>
	  </div>
	</div>
  </div>
</div>
<!-- End First Row -->
</div>
<!-------------------------------- end first step graph--------------->
<!-------------------------------- start second step graph--------------->
<div class="row">
<div class="col-md-8 clearbothmain" >
<div class="widget widget-shadow widget-responsive">
<h3 class="panel-title">{{ trans('app.new_registration_history')}}</h3>

<canvas id="buyers" width="580" height="350px" ></canvas>      
<?php $a=0; $b=0; $c=0; $d=0; $e=0; $f=0; $g=0; $h=0; $i = 0;$j= 0; $k=0; $l=0; ?> 
<script>
	// line chart data
	var buyerData = {
		labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
		datasets : [
		{
			fillColor : "rgba(172,194,132,0.4)",
			strokeColor : "#ACC26D",
			pointColor : "#fff",
			pointStrokeColor : "#9DB86D",
			data : [@foreach($graphregister as $value) @if($value->month == '01'){{$value->count}} @php($a += $value->count) @endif  @endforeach @if(empty($a)){{$a}} @endif,
			@foreach($graphregister as $value) @if($value->month == '02') {{$value->count}}  @php($b += $value->count) @endif  @endforeach @if(empty($b)){{$b}} @endif,
			@foreach($graphregister as $value) @if($value->month == '03') {{$value->count}}  @php($c += $value->count) @endif  @endforeach @if(empty($c)){{$c}} @endif,
			@foreach($graphregister as $value) @if($value->month == '04') {{$value->count}}  @php($d += $value->count) @endif  @endforeach @if(empty($d)){{$d}} @endif,
            @foreach($graphregister as $value) @if($value->month == '05') {{$value->count}}  @php($e += $value->count) @endif  @endforeach @if(empty($e)){{$e}} @endif,
            @foreach($graphregister as $value) @if($value->month == '06') {{$value->count}}  @php($f += $value->count) @endif  @endforeach @if(empty($f)){{$f}} @endif,
            @foreach($graphregister as $value) @if($value->month == '07') {{$value->count}}  @php($g += $value->count) @endif  @endforeach @if(empty($g)){{$g}} @endif,
            @foreach($graphregister as $value) @if($value->month == '08') {{$value->count}}  @php($h += $value->count) @endif  @endforeach @if(empty($h)){{$h}} @endif,
            @foreach($graphregister as $value) @if($value->month == '09') {{$value->count}}  @php($i += $value->count) @endif  @endforeach @if(empty($i)){{$i}} @endif,
            @foreach($graphregister as $value) @if($value->month == '10') {{$value->count}}  @php($j += $value->count) @endif  @endforeach @if(empty($j)){{$j}} @endif,
            @foreach($graphregister as $value) @if($value->month == '11') {{$value->count}}  @php($k += $value->count) @endif  @endforeach @if(empty($k)){{$k}} @endif,
            @foreach($graphregister as $value) @if($value->month == '12') {{$value->count}}  @php($l += $value->count) @endif  @endforeach @if(empty($l)){{$l}} @endif,
			]
		}
	]
	}
	// get line chart canvas
	var buyers = document.getElementById('buyers').getContext('2d');
	// draw line chart
	new Chart(buyers).Line(buyerData);
	// pie chart data
	var pieData = [
		{
			value: 20,
			color:"#878BB6"
		},		
		{
			value : 40,
			color : "#4ACAB4"
		},
		{
			value : 10,
			color : "#FF8153"
		},
		{
			value : 30,
			color : "#FFEA88"
		}
	];
	// pie chart options
	var pieOptions = {
		 segmentShowStroke : false,
		 animateScale : true
	}          
   
	//new Chart(income).Bar(barData);
</script>
</div>

</div>
<div class="col-lg-4 clearbothsub">
<div class="widget widget-shadow widget-responsive" style="height: 420px;">
  <!-- Panel Followers -->
  <div class="panel" id="followers">
	<div class="panel-heading">
	<h3 class="panel-title">
		{{ trans('app.latest_registrations')}} <a href="{{URL::to('/userlist')}}" class="pull-right"><button class="btn btn-outline btn-primary btn-round btn-xs">{{ trans('app.view_all')}}</button> </a>
	  </h3>
	</div>
	<div class="panel-body">
	  <ul class="list-group list-group-dividered list-group-full">
		@foreach($recentuser as $value)
		<li class="list-group-item">
		  <div class="media">
			<div class="media-left">
			  <a class="avatar {{Auth::user()->id == $value->id ? 'avatar-online' : 'avatar-away' }} " href="{{URL::to('/show')}}/{{$value->id}}">
			    @if(!$value->image)				 
					<img src="{{URL::to('/images')}}/default.png" alt="">
			    @else
					<img src="{{URL::to('/uploads')}}/{{$value->image}}" alt="">
				 @endif
				<i></i>
			  </a>
			</div>
			
			<div class="media-body">
			  <div class="pull-right">
				<em class="badge">
			      {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)->diffForHumans() }}
		     </em>
			  </div>
			  <div>
				<a href="{{URL::to('/show')}}/{{$value->id}}"><span><strong>{{$value->first_name}} {{$value->last_name}}</strong></span></a>
			  </div>			  
			</div>
		  </div>
		</li>
		@endforeach	
	  </ul>	 
	</div>
  </div>
  <!-- End Panel Followers -->
</div>
</div>
</div>
 <!-------------------------------- end second step graph---------------> 		
</div>

@stop
