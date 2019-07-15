<!DOCTYPE html>
<html lang="en">
<head>        
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Loginlog" content="width=device-width, initial-scale=1">
	<title>{{$settings->app_title}}</title>
	<!-- CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,700,700italic">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/assets_web/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/assets_web/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/assets_web/css/form-elements.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/assets_web/ultimate-flat-social-icons/ultm-css/ultm.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/assets_web/css/style.css">
	<link rel="stylesheet" href="{{URL::to('/')}}/assets/assets_web/css/media-queries.css"> 
</head>
<body style="background:#ddd;">
<!-- Top menu -->
<nav>
	<a class="menu-top" href="">{{ trans('app.home')}}</a>
	<a class="menu-subscribe" href="">{{ trans('app.subscribe')}}</a>
	<a class="menu-project" href="">{{ trans('app.our_projects')}}</a>
	<a class="menu-testimonials" href="">{{ trans('app.testimonials')}}</a>
	<a class="menu-about-us" href="">{{ trans('app.about_us')}}</a>
	<a class="menu-contact" href="">{{ trans('app.contact_us')}}</a>	
	<a id="link" target="_blank" href="{{URL::to('/dashboard')}}">{{ trans('app.login')}}</a>	
	
	 <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right" style="margin-right: 70px;">
	  <li class="dropdown">
		<a class="dropdown-toggle" title="Languages" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
		aria-expanded="false" role="button">
		
		 @if(Session::get('locale_image'))
		<img width="22.66" height="16" src="{{URL::to('/')}}/assets/flags/@if(Session::get('locale_image')){{Session::get('locale_image')}} @endif"/>
		 @else
			 <img width="22.66" height="16" src="{{URL::to('/')}}/assets/flags/america.png"/>
			 
			 <span class="flag-icon flag-icon-us"></span> 
		  @endif
		</a>
		<ul class="dropdown-menu" role="menu">			
		  @foreach($language as $viewdata)
		  <li role="presentation">
			<a class="link linklanguage"  href="{{URL::to('/LanguageController/chooser_language/')}}/{{$viewdata->foldername}}" role="menuitem">
			  @if(!empty($viewdata->flag_image))	<img src="{{URL::to('assets/flags')}}/{{$viewdata->flag_image}}"  width="18.66" height="14" /> @endif {{$viewdata->languagename}}
			 
		  </a>
		  </li>			
		 @endforeach
		</ul>
	  </li> 
	</ul>			
	<div class="hide-menu" style="float:right; right:-20px !important;">
		<a href="" rel="tooltip" data-placement="bottom" data-original-title="Hide menu">
			<i class="fa fa-bars"></i>
		</a>
	</div>
</nav>
<div class="show-menu" style="float:right; right:0px !important;">
	<a href="" rel="tooltip" data-placement="bottom" data-original-title="Show menu">
		<i class="fa fa-bars"></i>
	</a>
</div>		
@yield('content')

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-7 footer-copyright">
				<p>© {{date('Y')}} <a href="{{URL::to('/')}}">{{$settings->app_name}}</a></p>
			</div>
			<div class="col-sm-5 footer-social">
				<a class="ultm ultm-facebook ultm-48 ultm-square ultm-gray-to-color" href=""></a>
				<a class="ultm ultm-twitter ultm-48 ultm-square ultm-gray-to-color" href=""></a>
				<a class="ultm ultm-google-plus-1 ultm-48 ultm-square ultm-gray-to-color" href=""></a>
				<a class="ultm ultm-dribbble ultm-48 ultm-square ultm-gray-to-color" href=""></a>
				<a class="ultm ultm-pinterest ultm-48 ultm-square ultm-gray-to-color" href=""></a>
			</div>
		</div>
	</div>
</footer>	
<!-- Javascript -->
<script src="{{URL::to('/')}}/assets/assets_web/js/jquery-1.11.1.min.js"></script>
<script src="{{URL::to('/')}}/assets/assets_web/bootstrap/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/assets/assets_web/js/jquery.backstretch.min.js"></script>
<script src="{{URL::to('/')}}/assets/assets_web/js/jquery.countdown.min.js"></script>
<script src="{{URL::to('/')}}/assets/assets_web/twitter/jquery.tweet.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{URL::to('/')}}/assets/assets_web/js/jquery.ui.map.min.js"></script>
<script src="{{URL::to('/')}}/assets/assets_web/js/scripts.js"></script>
	
</body>
</html>
<script>
$('#link').click(function (e) {
    e.preventDefault();
    window.location = ($(e.currentTarget).attr("href"));
});
$('.linklanguage').click(function (e) {
    e.preventDefault();
    window.location = ($(e.currentTarget).attr("href"));
});


$('#linkdocument').click(function () {
    window.location = $("#linkdocument").attr("href");
  
});
</script>