@extends('layouts.web_template')

@section('content')
<!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        	<div>
                        		<!--<h1><a href=""> Responsive Design Coming Soon Template</a></h1>-->
                        		<h1><a href=""> <img class="navbar-brand-logo" style="height:100px" src="{{URL::to('/')}}/images/logo.png" title="Farazisoft"></a></h1>
                        	</div>
                            <h2>{{ trans('app.web_home_title')}}</h2>
                            <p>
							{{ trans('app.web_home_description')}}
                            	
                            </p>
                            <div class="timer">
                                <div class="days-wrapper">
                                    <span class="days"></span> <br>{{ trans('app.days')}} 
                                </div>
                                <div class="hours-wrapper">
                                    <span class="hours"></span> <br>{{ trans('app.hours')}} 
                                </div>
                                <div class="minutes-wrapper">
                                    <span class="minutes"></span> <br>{{ trans('app.minutes')}} 
                                </div>
                                <div class="seconds-wrapper">
                                    <span class="seconds"></span> <br> {{ trans('app.seconds')}} 
                                </div>
                            </div>
                            <p class="top-arrow">
                            	<i class="fa fa-chevron-down"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscription form -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 subscribe">
                    <h3>{{ trans('app.web_subscribe_title')}} </h3>
                    <p>{{ trans('app.web_subscribe_description')}} :</p>                    
                    <form class="form-inline" role="form" action="#" method="post">
	                	<div class="form-group">
	                		<label class="sr-only" for="subscribe-email">{{ trans('app.email_address')}}</label>
	                    	<input type="text" name="email" placeholder="{{ trans('app.web_enter_your_email')}} .." class="subscribe-email form-control" id="subscribe-email">
	                    </div>
	                    <button type="submit" class="btn">{{ trans('app.subscribe')}}</button>
	                </form>                    
                    <div class="success-message"></div>
                    <div class="error-message"></div>
                </div>
            </div>
        </div>
        
        <!-- About the new site -->
        <div class="about-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about">
	                    <h3>{{ trans('app.web_news_title')}}</h3>
	                    <p>{{ trans('app.web_news_description')}}</p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-4 about-box-1">
	                	<div class="about-box-1-icon">
	                		<i class="fa fa-eye"></i>
	                	</div>
	                    <h4>{{ trans('app.web_new_features_title')}}</h4>
	                    <p>{{ trans('app.web_new_features_description')}}</p>
	                </div>
	                <div class="col-sm-4 about-box-1">
	                	<div class="about-box-1-icon">
	                		<i class="fa fa-table"></i>
	                	</div>
	                    <h4>{{ trans('app.web_responsive_layout_title')}}</h4>
	                    <p>{{ trans('app.web_responsive_layout_description')}}</p>
	                </div>
	                <div class="col-sm-4 about-box-1">
	                	<div class="about-box-1-icon">
	                		<i class="fa fa-pencil"></i>
	                	</div>
	                    <h4>{{ trans('app.web_flat_design_title')}}</h4>
	                    <p>{{ trans('app.web_flat_design_description')}}</p>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- Testimonials -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials">
                    <h3>{{ trans('app.web_our_clients_title')}}</h3>
                    <div class="testimonial-active"></div>
                    <div class="testimonial-quote">&ldquo; &rdquo;</div>
                    <div class="testimonial-single">
                    	<p>{{ trans('app.web_our_clients_description_one')}}</p>
                    	<div class="testimonial-single-image">
                    		<img src="{{URL::to('/')}}/assets/assets_web/img/testimonials/1.jpg" alt="">
                    	</div>
                    </div>
                    <div class="testimonial-single">
                    	<p>{{ trans('app.web_our_clients_description_two')}}</p>
                    	<div class="testimonial-single-image">
                    		<img src="{{URL::to('/')}}/assets/assets_web/img/testimonials/2.jpg" alt="">
                    	</div>
                    </div>
                    <div class="testimonial-single">
                    	<p>{{ trans('app.web_our_clients_description_three')}}</p>
                    	<div class="testimonial-single-image">
                    		<img src="{{URL::to('/')}}/assets/assets_web/img/testimonials/3.jpg" alt="">
                    	</div>
                    </div>
                    <div class="testimonial-single">
                    	<p>{{ trans('app.web_our_clients_description_four')}}</p>
                    	<div class="testimonial-single-image">
                    		<img src="{{URL::to('/')}}/assets/assets_web/img/testimonials/2.jpg" alt="">
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Who's behind this -->
        <div class="whos-behind-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 whos-behind">
	                    <h3>{{ trans('app.web_about_us_title')}}</h3>
	                    <p>{{ trans('app.web_about_us_description')}} </p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-4 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<img src="{{URL::to('/')}}/assets/assets_web//img/team/1.jpg" alt="">
	                		<div class="whos-behind-social">
	                			<a href=""><i class="fa fa-facebook"></i></a>
	                			<a href=""><i class="fa fa-twitter"></i></a>
	                			<a href=""><i class="fa fa-linkedin"></i></a>
	                			<a href=""><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4>John Doe</h4>
	                    <h5>Developer</h5>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	                <div class="col-sm-4 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<img src="{{URL::to('/')}}/assets/assets_web//img/team/2.jpg" alt="">
	                		<div class="whos-behind-social">
	                			<a href=""><i class="fa fa-facebook"></i></a>
	                			<a href=""><i class="fa fa-twitter"></i></a>
	                			<a href=""><i class="fa fa-linkedin"></i></a>
	                			<a href=""><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4>Tim Brown</h4>
	                    <h5>Founder</h5>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	                <div class="col-sm-4 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<img src="{{URL::to('/')}}/assets/assets_web//img/team/3.jpg" alt="">
	                		<div class="whos-behind-social">
	                			<a href=""><i class="fa fa-facebook"></i></a>
	                			<a href=""><i class="fa fa-twitter"></i></a>
	                			<a href=""><i class="fa fa-linkedin"></i></a>
	                			<a href=""><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4>Sarah Red</h4>
	                    <h5>Designer</h5>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et.
	                    </p>
	                </div>
	            </div>
	            <!-- Latest tweets -->
	            <div class="row">
	                <div class="col-sm-12 latest-tweets">
	                    <h4>{{ trans('app.web_our_latest_tweets')}}</h4>
	                    <p class="tweet-active"></p>
	                    <div class="tweets"></div>
	                </div>
	            </div>
	        </div>
        </div>
        
        <!-- How to contact us -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact">
                    <h3>{{ trans('app.web_contact_us_title')}}</h3>
                    <p>{{ trans('app.web_contact_us_description')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 contact-form">
                    <h4>{{ trans('app.web_send_us_message')}}</h4>
                    <form role="form" action="#" method="post">
                    	<div class="form-group">
                    		<label class="sr-only" for="contact-email">{{ trans('app.email')}}</label>
                        	<input type="text" name="email" placeholder="{{ trans('app.email')}} .." class="contact-email form-control" id="contact-email">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="contact-subject">{{ trans('app.subject')}}</label>
                        	<input type="text" name="subject" placeholder="{{ trans('app.subject')}} .." class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="contact-message">{{ trans('app.message')}}</label>
                        	<textarea name="message" placeholder="{{ trans('app.message')}} .." class="contact-message form-control" id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn">{{ trans('app.send')}}</button>
                    </form>
                </div>
                <div class="col-sm-5 contact-address">
                    <h4>{{ trans('app.web_come_visit_us')}}</h4>
                    <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49706.33964074205!2d90.27861896430224!3d22.185158366462804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc1a4d73df4c7477!2sAzimpur+Bazar%2C+Shaheb+Bari!5e0!3m2!1sbn!2sbd!4v1476118170316" width="457px" height="210px" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    <h4>{{ trans('app.address')}}</h4>
                    <p><i class="fa fa-map-marker"></i>Amtali,Barguna, Bangladesh</p>
                    <p><i class="fa fa-phone"></i>{{ trans('app.phone')}}: 0000 000 0000</p>
                </div>
            </div>
        </div>
@endsection
