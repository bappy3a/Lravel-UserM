<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@foreach($settingdata as $view) {{$view->app_title}} @endforeach  </title>
  <!-- Stylesheets -->
  <link href="{{URL::to('assets/css')}}/bootstrap-fileupload.min.css" rel="stylesheet">
 
  {{Html::style('global/css/bootstrap.min.css')}}  
  {{Html::style('global/css/bootstrap-extend.min.css')}}
  
  {{Html::style('assets/css/site.min.css')}}
  
  <!-- Plugins -->
   {{Html::style('global/vendor/animsition/animsition.css')}}
   {{Html::style('global/vendor/asscrollable/asScrollable.css')}}
   {{Html::style('global/vendor/switchery/switchery.css')}}
   {{Html::style('global/vendor/intro-js/introjs.css')}}
   {{Html::style('global/vendor/slidepanel/slidePanel.css')}}
   {{Html::style('global/vendor/jvectormap/jquery-jvectormap.css')}}
   {{Html::style('assets/examples/css/dashboard/v1.css')}}
   {{Html::style('assets/examples/css/dashboard/analytics.css')}}
   
    <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/ladda-bootstrap/ladda.css">
  
   <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/uikit/buttons.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/uikit/dropdowns.css">
   
  <!-- Fonts -->
  {{Html::style('global/fonts/font-awesome/font-awesome.css')}}
  {{Html::style('global/fonts/weather-icons/weather-icons.css')}}
  {{Html::style('global/fonts/web-icons/web-icons.min.css')}}
  {{Html::style('global/fonts/brand-icons/brand-icons.min.css')}}
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  
  <!------------------------new mail css-------------------->
  <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/bootstrap-markdown/bootstrap-markdown.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/global/vendor/select2/select2.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/assets/examples/css/apps/mailbox.css">
  <!------------------------end new mail css-------------------->
  
	<style>
	.page-content {padding: 0px 30px;}
	</style>
  
  {{ Html::script('global/vendor/modernizr/modernizr.js') }}
  {{ Html::script('global/vendor/breakpoints/breakpoints.js') }}
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
  <!--<script src="{{URL::to('assets/js')}}/angular.js"></script>--> 
{{Html::style('assets/css/loaders.css')}}
{{Html::style('assets/css/loaders.min.css')}} 
 <script>
  Breakpoints();
  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
 {{ Html::script('global/vendor/jquery/jquery.js') }}
  </head>
<body class="dashboard app-mailbox">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        @foreach($settingdata as $view)
		<img class="navbar-brand-logo" src="{{URL::to('/')}}/uploads/{{$view->logo}}" title="{{$view->app_name}}">
        
		<span class="navbar-brand-text hidden-xs"> {{$view->app_name}} </span>
		@endforeach	
      </div>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          
		  <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="fade" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/animation')}}">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/buttons')}}">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/colors')}}">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/dropdowns')}}">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/icons')}}">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/lightbox')}}">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/modals')}}">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/progressBars')}}">Progress</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/pricingTables')}}">Pricing</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/tooltip')}}">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/scrollable')}}">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a href="{{URL::to('/typography')}}">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="{{URL::to('/')}}/global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
		  
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" title="{{ trans('app.languages')}}" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
            aria-expanded="false" role="button">
           
			 @if(Session::get('locale_image'))
			<img width="18.66" height="14" src="{{URL::to('/')}}/assets/flags/@if(Session::get('locale_image')){{Session::get('locale_image')}} @endif"/>
			 @else
				 <img width="22.66" height="16" src="{{URL::to('/')}}/assets/flags/america.png"/>
			  @endif
            </a>
			<ul class="dropdown-menu" role="menu">
			
			  @foreach($language as $viewdata)
              <li role="presentation">
                <a href="{{URL::to('/LanguageController/chooser_language/')}}/{{$viewdata->foldername}}" role="menuitem">
                  @if(!empty($viewdata->flag_image))	<img src="{{URL::to('assets/flags')}}/{{$viewdata->flag_image}}"  width="18.66" height="14" /> @endif {{$viewdata->languagename}}
				 
              </a>
			  </li>			
			 @endforeach
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" title="{{ trans('app.my_profile')}}"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
              <!--  <img src="{{URL::to('/')}}/global/portraits/5.jpg" alt="...">-->
			  @if(!empty(Auth::user()->image))				
                <img src="{{URL::to('/')}}/uploads/{{Auth::user()->image}}" alt="...">
			  @else
				   <img src="{{URL::to('/')}}/images/default.png" alt="...">
				 @endif
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="{{URL::to('profile')}}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> {{ trans('app.my_profile')}}</a>
              </li>
              <!--<li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>-->
			  @if (Auth::user()->hasRole('Admin'))
              <li role="presentation">
                <a href="{{URL::to('settings')}}" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i>{{ trans('app.settings')}}</a>
              </li>
			  @endif
              <li class="divider" role="presentation"></li>
              <li role="presentation">
			  <a href="{{ url('/logout') }}"
					onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
					{{ trans('app.logout')}}
				</a>
				<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
               <!-- <a href="{{URL::to('logout')}}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> {{ trans('app.logout')}}</a>-->
              </li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="{{ trans('app.messages')}}" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
			  <?php 
			  use App\Http\Controllers\MessageController;
				$newmessagecount =  MessageController::messagecount()			 
			  ?>
			   @if(!empty($newmessagecount))<span class="badge badge-info up">{{$newmessagecount}}</span>@endif
              <!--<span class="badge badge-info up">3</span>-->
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>{{ trans('app.messages')}}</h5>
               @if(!empty($newmessagecount)) <span class="label label-round label-info"> New {{$newmessagecount}}</span>@endif
              </li>
              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
				  <?php  $inboxnewmessages =  MessageController::inboxnewmessage()  ?>
				 
                   @foreach($inboxnewmessages as $view)
				   <a class="list-group-item" href="{{URL::to('/inboxDetails')}}/{{$view->id }}/{{$view->replay_id ? $view->replay_id : $view->id }}" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="{{URL::to('/')}}/{{(!empty($view->receiveMessage->image)?'uploads' :'images')}}/{{(!empty($view->receiveMessage->image)?$view->receiveMessage->image :'default.png')}}" alt="..." />
                           
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">{{$view->receiveMessage->first_name}} {{$view->receiveMessage->last_name}}</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T20:22:05+08:00">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $view->created_at)->diffForHumans() }}</time>
                          </div>
                          <div class="media-detail">{{(!empty($view->subject))? $view->subject : trans('app.replay_message')}}</div>
                        </div>
                      </div>
                    </a>
					@endforeach
					
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="{{URL::to('/message')}}" role="menuitem">
                    {{ trans('app.see_all_messages')}} 
                  </a>
              </li>
            </ul>
          </li>
		  @if (Auth::user()->hasRole('Admin'))
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="{{ trans('app.sidebar')}}" data-url="{{URL::to('SettingController/sidebar/')}}">
           
              <!--<i class="icon wb-chat" aria-hidden="true"></i>-->
			  <i class="icon wb-more-vertical" aria-hidden="true"></i>
            </a>
          </li>
		  @endif
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search" action="{{URL::to('userlist')}}">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="search" placeholder="{{ trans('app.search_for_users')}}">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
           <!-- <li class="site-menu-category">General</li>-->
          <br/>
 <!-------------- Dashboard menu --------------->			
	 <li class="site-menu-category" style="margin-top:1px; text-transform:none;font-size:16px; color:white; "><b>CRUD Example</b></li>
            <li class="site-menu-item has-sub {{ Request::is('dashboard') ? 'active open' : '' }}">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">{{ trans('app.dashboard')}}</span>
               <span class="site-menu-arrow"></span>
              </a>			  
              <ul class="site-menu-sub">
                <li class="site-menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('/dashboard')}}">
                    <!--<span class="site-menu-title">Dashboard</span>-->
                    <span class="site-menu-title">{{ trans('app.home')}}</span>
                  </a>
                </li>
              </ul>
			  
            </li>
	<!-------------- Users menu --------------->	
 @permission(['users.manage', 'users.activity'])	
           
			<li class="site-menu-item has-sub  {{ Request::is('userlist','registration','activity') ? 'active open' : '' }}">
              <a href="javascript:void(0)">
			  <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">{{ trans('app.users')}}</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
               @permission('users.manage') 
				<li class="site-menu-item {{ Request::is('registration') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('/registration')}}">
                    <span class="site-menu-title">{{ trans('app.add_user')}}</span>
                  </a>
                </li>
                <li class="site-menu-item {{ Request::is('userlist') ? 'active' : '' }}">
                  <a class="animsition-link " href="{{URL::to('userlist')}}">
                    <span class="site-menu-title">{{ trans('app.users')}}</span>
                  </a>
                </li>
				@endpermission
				@permission('users.activity') 
                <li class="site-menu-item {{ Request::is('activity') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('activity')}}">
                    <span class="site-menu-title">{{ trans('app.activity_log')}}</span>
                  </a>
                </li>  
				@endpermission
              </ul>			  
            </li>
			@endpermission
	<!-------------- language menu --------------->
			 @permission('languages.languages')
			 <li class="site-menu-item has-sub {{ Request::is('language') ? 'active open' : '' }}">
              <a href="javascript:void(0)">
			  <i class="site-menu-icon fa-language" aria-hidden="true"></i>
                <span class="site-menu-title">{{ trans('app.languages')}}</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item {{ Request::is('language') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL('/language')}}">
                    <span class="site-menu-title">{{ trans('app.languages')}}</span>
                  </a>
                </li>
              </ul>
            </li>
			@endpermission
<!-------------- roles and permission  menu --------------->
		 @permission(['roles.manage', 'permissions.manage'])
			 <li class="site-menu-item has-sub {{ Request::is('permissions','roles') ? 'active open' : '' }}">
              <a href="javascript:void(0)">
			  <i class="site-menu-icon fa-lock" aria-hidden="true"></i>
                <span class="site-menu-title">{{ trans('app.roles_and_permissions')}}</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
			   @permission('roles.manage')
                <li class="site-menu-item {{ Request::is('roles') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('/roles')}}">
                    <span class="site-menu-title">{{ trans('app.roles')}}</span>
                  </a>
                </li>
				@endpermission
				 @permission('roles.manage')
				<li class="site-menu-item {{ Request::is('permissions') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('/permissions')}}">
                    <span class="site-menu-title">{{ trans('app.permissions')}}</span>
                  </a>
                </li>
				@endpermission
              </ul>
            </li>
		@endpermission	
<!-------------- Message  menu --------------->
		@permission('message.messages')
			 <li class="site-menu-item has-sub {{ Request::is('message') ? 'active open' : '' }}">
              <a href="javascript:void(0)">
			  <i class="site-menu-icon fa fa-envelope-o" aria-hidden="true"></i>
                <span class="site-menu-title">{{ trans('app.messages')}}</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item {{ Request::is('message') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('/message')}}">
                    <span class="site-menu-title">{{ trans('app.messages')}}</span>
                  </a>
                </li>
              </ul>
            </li>
		@endpermission		
<!-------------- Settings  menu --------------->
		@permission('settings.general')
			 <li class="site-menu-item has-sub {{ Request::is('settings') ? 'active open' : '' }}">
              <a href="javascript:void(0)">
			  <i class="site-menu-icon wb-settings" aria-hidden="true"></i>
                <span class="site-menu-title">{{ trans('app.settings')}}</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item {{ Request::is('settings') ? 'active' : '' }}">
                  <a class="animsition-link" href="{{URL::to('/settings')}}">
                    <span class="site-menu-title">{{ trans('app.general_settings')}}</span>
                  </a>
                </li>
              </ul>
            </li>			
         @endpermission	
     
	 </li>
	<!----------- end basic ui ------------->		
		
<!---
<!------- End Widgets  ------------->
	
          </ul>
        </div>
      </div>
    </div>
    <div class="site-menubar-footer">
	<a href="{{URL::to('profileEdit')}}" data-placement="top" data-toggle="tooltip" data-original-title="{{ trans('app.edit_profile')}}">
       <i class="icon wb-pencil" aria-hidden="true"></i>
      </a>
       @if (Auth::user()->hasRole('Admin'))
	  <a href="{{URL::to('settings')}}" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="{{ trans('app.settings')}}">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
	  @else
	  <a class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="">
        &nbsp;
      </a>
	  @endif
      <a href="{{ url('/logout') }}"
			onclick="event.preventDefault();
					 document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="{{ trans('app.logout')}}">
			<span class="icon wb-power" aria-hidden="true"></span>
		</a>
		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
    </div>
  </div>
<!-------------------- logo click menu---------------->
  <div class="site-gridmenu">
    <div>
      <div>
        <ul>
		 <li>
            <a href="{{URL::to('/dashboard')}}">
              <i class="icon wb-dashboard"></i>
              <span>{{ trans('app.dashboard')}}</span>
            </a>
          </li>
		  @permission('users.manage')
		  <li>
            <a href="{{URL::to('userlist')}}">
              <i class="icon wb-users" aria-hidden="true"></i>
              <span>{{ trans('app.users')}}</span>
            </a>
          </li>
		  @endpermission
		  @permission('languages.languages')
		   <li>
            <a href="{{URL::to('language')}}">
            <i class="icon fa-language" aria-hidden="true"></i>			
             
              <span>{{ trans('app.languages')}}</span>
            </a>
          </li>
		   @endpermission
		   @permission('message.messages')
          <li>
            <a href="{{URL::to('message')}}">
              <i class="icon wb-envelope"></i>
              <span>{{ trans('app.messages')}}</span>
            </a>
          </li> 
			 @endpermission
			 @permission('permissions.manage')
          <li>
            <a href="{{URL::to('permissions')}}">
              <i class="icon wb-lock"></i>
              <span>{{ trans('app.permissions')}}</span>
            </a>
          </li>
          @endpermission
		  @permission('settings.general')
          <li>
            <a href="{{URL::to('settings')}}">
              <i class="icon wb-settings" aria-hidden="true"></i>
              <span>{{ trans('app.settings')}}</span>
            </a>
          </li>
         @endpermission
		
        </ul>
      </div>
    </div>
  </div>
  <!-- Page -->
 
 <maindd>
<div class="loadersjew">
	<div class="loaderjew"><div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div></div>
	<!--<div class="loaderjew"><div class="line-scale-party"><div></div><div></div><div></div><div></div></div></div>-->
	<!--<div class="loader"><div class="line-scale-pulse-out"><div></div><div></div><div></div><div></div><div></div></div></div>
	<div class="loader"><div class="line-scale-pulse-out-rapid"><div></div><div></div><div></div><div></div><div></div></div></div>-->
	</div>
</maindd>

  <div class="page" style="animation-duration: 800ms; opacity: 1;">
   <!-- page content -->
   
	@yield('content')
	<!-- /page content -->
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© {{date('Y')}} <a href="{{URL::to('/')}}">@foreach($settingdata as $view) {{$view->app_name}} @endforeach</a></div>
    <div class="site-footer-right">
     {{ trans('app.email')}} <i class="red-600 wb wb-heart"></i>  @foreach($settingdata as $view) {{$view->app_email}} @endforeach 
    </div>
  </footer>
 <!-- Core  -->  
  
   {{ Html::script('global/vendor/bootstrap/bootstrap.js') }}
   {{ Html::script('global/vendor/animsition/animsition.js') }}
   {{ Html::script('global/vendor/asscroll/jquery-asScroll.js') }}
   {{ Html::script('global/vendor/mousewheel/jquery.mousewheel.js') }}
   {{ Html::script('global/vendor/asscrollable/jquery.asScrollable.all.js') }}
   {{ Html::script('global/vendor/ashoverscroll/jquery-asHoverScroll.js') }}
   
  <!-- Plugins -->
  {{ Html::script('global/vendor/switchery/switchery.min.js') }}
  {{ Html::script('global/vendor/intro-js/intro.js') }}
  {{ Html::script('global/vendor/screenfull/screenfull.js') }}
  {{ Html::script('global/vendor/slidepanel/jquery-slidePanel.js') }}
  {{ Html::script('global/vendor/skycons/skycons.js') }}
  {{ Html::script('global/vendor/aspieprogress/jquery-asPieProgress.min.js') }}
  {{ Html::script('global/vendor/jvectormap/jquery.jvectormap.min.js') }}
  {{ Html::script('global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js') }}
  {{ Html::script('global/vendor/matchheight/jquery.matchHeight-min.js') }}
  <!-- Scripts -->
   {{ Html::script('global/js/core.js') }}
   {{ Html::script('assets/js/site.js') }}
   {{ Html::script('assets/js/sections/menu.js') }}
   {{ Html::script('assets/js/sections/menubar.js') }}
   {{ Html::script('assets/js/sections/gridmenu.js') }}
   {{ Html::script('assets/js/sections/sidebar.js') }}
   {{ Html::script('global/js/configs/config-colors.js') }}
   {{ Html::script('assets/js/configs/config-tour.js') }}
   {{ Html::script('global/js/components/asscrollable.js') }}
   {{ Html::script('global/js/components/animsition.js') }}
   {{ Html::script('global/js/components/slidepanel.js') }}
   <script src="{{URL::to('/')}}/global/vendor/filament-tablesaw/tablesaw.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/filament-tablesaw/tablesaw-init.js"></script>
  
    <script src="{{URL::to('/')}}/global/vendor/ladda-bootstrap/spin.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/ladda-bootstrap/ladda.js"></script>
<script src="{{URL::to('/')}}/global/js/components/ladda-bootstrap.js"></script> 
 
  {{ Html::script('global/js/components/switchery.js') }}
   {{ Html::script('global/js/components/matchheight.js') }}
   {{ Html::script('global/js/components/jvectormap.js') }}
    <script src="{{URL::to('/')}}/global/vendor/jquery-ui/jquery-ui.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-tmpl/tmpl.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-load-image/load-image.all.min.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload-process.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload-image.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload-audio.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload-video.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload-validate.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/blueimp-file-upload/jquery.fileupload-ui.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/dropify/dropify.min.js"></script>
  
	<script src="{{URL::to('/')}}/global/vendor/asprogress/jquery-asProgress.js"></script>
   <script src="{{URL::to('/')}}/global/vendor/asrange/jquery-asRange.min.js"></script>
   <script src="{{URL::to('/')}}/assets/examples/js/uikit/icon.js"></script>
   <script src="{{URL::to('assets/js')}}/bootstrap-fileupload.min.js"></script>
   
   <script src="{{URL::to('/')}}/global/vendor/owl-carousel/owl.carousel.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/slick-carousel/slick.js"></script>
    <!-- New for mail box -->
  <script src="{{URL::to('/')}}/global/vendor/select2/select2.min.js"></script> 
  <script src="{{URL::to('/')}}/global/vendor/bootstrap-markdown/bootstrap-markdown.js"></script>
 <script src="{{URL::to('/')}}/global/vendor/webui-popover/jquery.webui-popover.min.js"></script>
  
  
  <script src="{{URL::to('/')}}/global/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/filterable.js"></script>
  <!--<script src="{{URL::to('/')}}/assets/examples/js/pages/gallery.js"></script>-->
  
  <script src="{{URL::to('/')}}/global/vendor/toolbar/jquery.toolbar.min.js"></script>
   <script src="{{URL::to('/')}}/global/js/components/webui-popover.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/toolbar.js"></script>
  <script src="{{URL::to('/')}}/assets/examples/js/uikit/tooltip-popover.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/magnific-popup/jquery.magnific-popup.js"></script>
 <script src="{{URL::to('/')}}/global/vendor/raty/jquery.raty.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/toastr/toastr.js"></script>
   <script src="{{URL::to('/')}}/global/vendor/html5sortable/html.sortable.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/nestable/jquery.nestable.js"></script>

  
  <script src="{{URL::to('/')}}/global/vendor/bootbox/bootbox.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/select2.js"></script>
  <script src="{{URL::to('/')}}/global/js/plugins/action-btn.js"></script>
  <script src="{{URL::to('/')}}/global/js/plugins/selectable.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/selectable.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/material.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/bootbox.js"></script>
  
 <script src="{{URL::to('/')}}/assets/js/app.js"></script>
  <script src="{{URL::to('/')}}/assets/examples/js/apps/mailbox.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/input-group-file.js"></script> 
  <script src="{{URL::to('/')}}/global/js/components/asprogress.js"></script>
<script src="{{URL::to('/')}}/assets/examples/js/uikit/progress-bars.js"></script> 
<script src="{{URL::to('/')}}/assets/examples/js/pages/faq.js"></script>

  <script src="{{URL::to('/')}}/assets/examples/js/advanced/animation.js"></script>
   <script src="{{URL::to('/')}}/global/js/components/magnific-popup.js"></script>
  <script src="{{URL::to('/')}}/assets/examples/js/advanced/lightbox.js"></script>
 <script src="{{URL::to('/')}}/assets/examples/js/advanced/scrollable.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/raty.js"></script>
   <script src="{{URL::to('/')}}/global/js/components/toastr.js"></script>
    <script src="{{URL::to('/')}}/global/js/components/html5sortable.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/nestable.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/tasklist.js"></script>
    <script src="{{URL::to('/')}}/global/js/components/bootstrap-sweetalert.js"></script>
  <script src="{{URL::to('/')}}/assets/examples/js/advanced/bootbox-sweetalert.js"></script>
 
 <script src="{{URL::to('/')}}/global/vendor/jquery-wizard/jquery-wizard.js"></script>
<script src="{{URL::to('/')}}/global/vendor/formvalidation/formValidation.js"></script>
  <script src="{{URL::to('/')}}/global/vendor/formvalidation/framework/bootstrap.js"></script>
   <script src="{{URL::to('/')}}/global/js/components/jquery-wizard.js"></script>
  <script src="{{URL::to('/')}}/assets/examples/js/forms/wizard.js"></script>
  <script src="{{URL::to('/')}}/assets/examples/js/forms/validation.js"></script>
 <script src="{{URL::to('/')}}/global/vendor/formatter-js/jquery.formatter.js"></script>
  <script src="{{URL::to('/')}}/global/js/components/formatter-js.js"></script> 
<script src="{{URL::to('/')}}/global/vendor/cropper/cropper.min.js"></script>  
 <script src="{{URL::to('/')}}/assets/examples/js/forms/image-cropping.js"></script>
      
 
  <script src="{{URL::to('/')}}/global/js/components/dropify.js"></script>
   <script src="{{URL::to('/')}}/assets/examples/js/forms/uploads.js"></script>
   
   
   <script type="text/javascript">	
	/* tab storage */
	$(function() { 
		// for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			// save the latest tab; use cookies if you like 'em better:
			localStorage.setItem('lastTab', $(this).attr('href'));
		});

		// go to the latest tab, if it exists:
		var lastTab = localStorage.getItem('lastTab');
		if (lastTab) {
			$('[href="' + lastTab + '"]').tab('show');
		}
	});

	/* Activity info */
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover();   
	});
	</script>
  <div class="modal fade modal-3d-flip-vertical exampleNiftyFlipVertical" id="exampleNiftyFlipVertical" aria-hidden="true"
  aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		  <h4 class="modal-title">{{ trans('app.delete_confirm')}}</h4>
		</div>
		<div class="modal-body">
		  <p> {{ trans('app.are_you_sure_delete_user')}}</p>
		
		  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default margin-0" data-dismiss="modal">{{ trans('app.close')}}</button>
		  <a class="btn btn-danger btn-ok">{{ trans('app.yes_delete_him')}}</a>
		</div>
	  </div>
	</div>
  </div>
  <!-- End Modal -->
  <script>
  $('.exampleNiftyFlipVertical').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});	
	/* for loading button */
	$('.loadingclick').on('click', function() {
		var $this = $(this);
	  $this.button('loading');
		setTimeout(function() {
		   $this.button('reset');
	   }, 22000);
	});
  $("[rel='tooltip']").tooltip();
	
/* for message timeout */
$(document).ready(function(){	
	 $(".alertDismissible").fadeTo(3000, 800).slideUp(1000, function(){
       $(".alertDismissible").slideUp(1000);
	   });
});
</script>
<script src="{{URL::to('/')}}/global/js/components/owl-carousel.js"></script>
<script src="{{URL::to('/')}}/assets/examples/js/uikit/carousel.js"></script>
<script src="{{URL::to('/')}}/global/js/components/table.js"></script> 

<script src="{{URL::to('/')}}/global/vendor/editable-table/mindmup-editabletable.js"></script>
<script src="{{URL::to('/')}}/global/vendor/editable-table/numeric-input-example.js"></script>
<script src="{{URL::to('/')}}/global/js/components/editable-table.js"></script>
<script src="{{URL::to('/')}}/assets/examples/js/tables/editable.js"></script>

<script src="{{URL::to('/')}}/global/vendor/jsgrid/jsgrid.js"></script>
<script src="{{URL::to('/')}}/assets/examples/js/tables/jsgrid-db.js"></script>
<script src="{{URL::to('/')}}/assets/examples/js/tables/jsgrid.js"></script>

 <!----------- for datepicker ------------->
<script src="{{URL::to('/')}}/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="{{URL::to('/')}}/global/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
<script src="{{URL::to('/')}}/global/vendor/datepair-js/datepair.min.js"></script>
<script src="{{URL::to('/')}}/global/vendor/datepair-js/jquery.datepair.min.js"></script>

<script src="{{URL::to('/')}}/global/js/components/bootstrap-datepicker.js"></script>
<script src="{{URL::to('/')}}/global/js/components/jt-timepicker.js"></script>
<script src="{{URL::to('/')}}/global/js/components/datepair-js.js"></script>
<!--<script src="{{URL::to('/')}}/assets/examples/js/forms/advanced.js"></script> -->
    
  <!--<div class="loader-fb"></div>-->
<script>
 $(window).load(function() {		
  $(".loadersjew").fadeOut("slow");;
 });
</script>
   
</body>
</html>








