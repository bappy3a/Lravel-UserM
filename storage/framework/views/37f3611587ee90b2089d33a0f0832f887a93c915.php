
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::to('/')); ?>/assets/examples/css/widgets/social.css">
  <div class="page-header">
  <h1 class="page-title font_lato">Social </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li class="active">Social</li>
	</ol>
  </div>
</div> 
 <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <!-- Panel Example1 -->
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow text-center">
            <div class="widget-header cover overlay" style="height: calc(100% - 100px);">
              <img class="cover-image" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
              style="height: 100%;">
              <div class="overlay-panel vertical-align">
                <div class="vertical-align-middle">
                  <a class="avatar avatar-100 bg-white margin-bottom-10 img-bordered margin-xs-0"
                  href="javascript:void(0)">
                    <img src="<?php echo e(URL::to('/')); ?>/global/portraits/1.jpg" alt="">
                  </a>
                  <div class="font-size-20">Herman Beck</div>
                  <div class="font-size-14 grey-400">Designer</div>
                </div>
              </div>
            </div>
            <div class="widget-footer padding-horizontal-30 padding-vertical-20 height-100">
              <div class="row no-space">
                <div class="col-xs-4">
                  <div class="counter">
                    <div class="counter-label">Followers</div>
                    <span class="counter-number">11.2K</span>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <div class="counter-label">Following</div>
                    <span class="counter-number">683</span>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <div class="counter-label">Tweets</div>
                    <span class="counter-number">326</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Example1 -->
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header cover overlay" style="height: calc(100% - 100px);">
              <img class="cover-image" src="<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png" alt="..."
              style="height: 100%;">
              <div class="overlay-panel overlay-background overlay-top">
                <div class="row">
                  <div class="col-xs-6">
                    <div class="font-size-20 white">Mary Adams</div>
                    <div class="font-size-14 grey-400">Designer</div>
                  </div>
                  <div class="col-xs-6 text-right">
                    <div class="avatar">
                      <img src="<?php echo e(URL::to('/')); ?>/global/portraits/2.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget-footer text-center bg-white padding-horizontal-30 padding-vertical-20 height-100">
              <div class="row no-space">
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number">6809</span>
                    <div class="counter-label">Followers</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number">569</span>
                    <div class="counter-label">Following</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number">357</span>
                    <div class="counter-label">Tweets</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header cover overlay">
              <div class="cover-background height-150" style="background-image: url('<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png')"></div>
            </div>
            <div class="widget-body padding-horizontal-30 padding-vertical-20" style="height:calc(100% - 250px);">
              <div style="position:relative;padding-left:110px;">
                <a class="avatar avatar-100 bg-white img-bordered" href="javascript:void(0)" style="position:absolute;top:-50px;left:0;">
                  <img src="<?php echo e(URL::to('/')); ?>/global/portraits/2.jpg" alt="">
                </a>
                <div class="margin-bottom-20">
                  <div class="font-size-20">Caleb Richards</div>
                  <div class="font-size-14">Designer</div>
                </div>
              </div>
              <p>
                Reiciendis iactant eligendi. Vestrae referenda mundus asperum physico miserum viderer
                potiendi, feci dissentiunt ardore, audaces.
              </p>
            </div>
            <div class="widget-footer text-center bg-blue-grey-400 padding-30 height-100">
              <div class="row no-space">
                <div class="col-xs-6">
                  <div class="counter counter-inverse">
                    <span class="counter-number">7896</span>
                    <div class="counter-label inline-block margin-left-5">Followers</div>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="counter counter-inverse">
                    <span class="counter-number">621</span>
                    <div class="counter-label inline-block margin-left-5">Following</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-content padding-20 bg-green-500 white height-full">
              <a class="avatar pull-left margin-right-20" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/15.jpg" alt="">
              </a>
              <div style="overflow:hidden;">
                <small class="pull-right grey-200">Yeserday, 13:48</small>
                <div class="font-size-18">Robin Ahrens</div>
                <div class="grey-200 font-size-14 margin-bottom-10">Web Designer</div>
                <blockquote class="cover-quote font-size-16 white">Oportet magnopere optio ignavia tribuat derigatur, idem, vituperatum.
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-content white bg-twitter padding-20 height-full">
              <h3 class="white margin-top-0">Astris fere mediocris evertunt deterruisset impetu, fabulae praetorem.</h3>
              <small>21 May, 2016 via mobile</small>
              <div class="margin-top-30">
                <i class="icon bd-twitter font-size-26"></i>
                <ul class="list-inline pull-right margin-top-15">
                  <li>
                    <i class="icon wb-heart"></i> 598
                  </li>
                  <li>
                    <i class="icon wb-thumb-up"></i> 96
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-content white bg-facebook padding-20 height-full">
              <h3 class="white margin-top-0">Pertinerent iucunditatem animal dixit ipsos, probabo proprius universas.</h3>
              <small>21 May, 2016 via mobile</small>
              <div class="margin-top-30">
                <i class="icon bd-facebook font-size-26"></i>
                <ul class="list-inline pull-right margin-top-15">
                  <li>
                    <i class="icon wb-heart"></i> 1256
                  </li>
                  <li>
                    <i class="icon wb-star"></i> 379
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header bg-green-600 padding-30 white">
              <a class="avatar avatar-100 img-bordered bg-white pull-left margin-right-20" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/11.jpg" alt="">
              </a>
              <div class="vertical-align height-100 text-truncate">
                <div class="vertical-align-middle">
                  <div class="font-size-20 margin-bottom-5 text-truncate">Gwendolyn Wheeler</div>
                  <div class="font-size-14 text-truncate">Adminnistrator</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header bg-blue-600 padding-30 white text-center">
              <a class="avatar avatar-100 img-bordered bg-white" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/12.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header padding-30 bg-white">
              <a class="avatar avatar-100 pull-left margin-right-20" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/13.jpg" alt="">
              </a>
              <div class="vertical-align text-right height-100 text-truncate">
                <div class="vertical-align-middle">
                  <div class="font-size-20 margin-bottom-5 blue-600 text-truncate">Sarah Graves</div>
                  <div class="font-size-14 text-truncate">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="widget widget-shadow">
            <div class="widget-header padding-30 bg-blue-600 white">
              <a class="avatar avatar-100 img-bordered bg-white pull-right" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/14.jpg" alt="">
              </a>
              <div class="vertical-align height-100 text-truncate">
                <div class="vertical-align-middle">
                  <div class="font-size-20 margin-bottom-5 text-truncate">Andrew Hoffman</div>
                  <div class="font-size-14 text-truncate">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-plugin="masonry">
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow">
            <div class="widget-header bg-blue-600 text-center padding-30 padding-bottom-15">
              <div class="font-size-20 white">June Lane</div>
              <div class="grey-300 font-size-14 margin-bottom-20">Web Designer</div>
              <a class="avatar avatar-100 img-bordered margin-bottom-10 bg-white" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/4.jpg" alt="">
              </a>
            </div>
            <div class="widget-footer padding-horizontal-30 padding-vertical-20 text-center">
              <div class="row no-space">
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number blue-600">102</span>
                    <div class="counter-label">Projects</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number blue-600">83</span>
                    <div class="counter-label">Clients</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number blue-600">13.5K</span>
                    <div class="counter-label">Followers</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget">
            <div class="widget-header white bg-cyan-600 padding-30 clearfix">
              <a class="avatar avatar-100 pull-left margin-right-20" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/5.jpg" alt="">
              </a>
              <div class="pull-left">
                <div class="font-size-20 margin-bottom-15">Robin Ahrens</div>
                <p class="margin-bottom-5 text-nowrap"><i class="icon wb-map margin-right-10" aria-hidden="true"></i>
                  <span class="text-break">Mountain View,CA 94043, United States</span>
                </p>
                <p class="margin-bottom-5 text-nowrap"><i class="icon wb-envelope margin-right-10" aria-hidden="true"></i>
                  <span class="text-break">amazingSurge@yahoo.com</span>
                </p>
                <p class="margin-bottom-5 text-nowrap"><i class="icon bd-twitter margin-right-10" aria-hidden="true"></i>
                  <span class="text-break">Kolage</span>
                </p>
              </div>
            </div>
            <div class="widget-content">
              <div class="row no-space padding-vertical-20 padding-horizontal-30 text-center">
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number cyan-600">102</span>
                    <div class="counter-label">Projects</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number cyan-600">125</span>
                    <div class="counter-label">Clients</div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter">
                    <span class="counter-number cyan-600">10.8K</span>
                    <div class="counter-label">Followers</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow avatar-group">
            <div class="widget-header text-center padding-30">
              <ul class="list-unstyled list-inline">
                <li>
                  <a class="avatar avatar-lg margin-5" href="javascript:void(0)">
                    <img src="<?php echo e(URL::to('/')); ?>/global/portraits/7.jpg" alt="">
                  </a>
                </li>
                <li>
                  <a class="avatar avatar-lg margin-5" href="javascript:void(0)">
                    <img src="<?php echo e(URL::to('/')); ?>/global/portraits/8.jpg" alt="">
                  </a>
                </li>
                <li>
                  <a class="avatar avatar-lg margin-5" href="javascript:void(0)">
                    <img src="<?php echo e(URL::to('/')); ?>/global/portraits/9.jpg" alt="">
                  </a>
                </li>
              </ul>
              <div class="font-size-18 blue-600">Amazing Surge</div>
              <div class="font-size-14">Design</div>
            </div>
            <div class="widget-footer bg-blue-grey-400 white text-center padding-vertical-20 padding-horizontal-30">
              <div class="row no-space ">
                <div class="col-xs-4">
                  <div class="counter counter-inverse">
                    <span class="counter-icon"><i class="icon wb-eye margin-right-15" aria-hidden="true"></i></span>
                    <span class="counter-number">102</span>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter counter-inverse">
                    <span class="counter-icon"><i class="icon wb-heart margin-right-15" aria-hidden="true"></i></span>
                    <span class="counter-number">8</span>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="counter counter-inverse">
                    <span class="counter-icon"><i class="icon wb-user margin-right-15" aria-hidden="true"></i></span>
                    <span class="counter-number">12.6K</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow background-bottom">
            <div class="widget-header cover overlay">
              <div class="cover-background height-250" style="background-image: url(../../../global/photos/placeholder.png)"></div>
              <div class="overlay-panel overlay-background overlay-bottom">
                <div class="row no-space">
                  <div class="col-xs-6">
                    <a class="avatar avatar-lg bg-white pull-left margin-right-20 img-bordered" href="javascript:void(0)">
                      <img src="<?php echo e(URL::to('/')); ?>/global/portraits/10.jpg" alt="">
                    </a>
                    <div>
                      <div class="font-size-20">William Dalebout</div>
                      <div class="font-size-14">CEO</div>
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <div class="row no-space text-center">
                      <div class="col-xs-4">
                        <div class="counter counter-inverse">
                          <div class="counter-label">Followers</div>
                          <span class="counter-number">6584</span>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="counter counter-inverse">
                          <div class="counter-label">Following</div>
                          <span class="counter-number">2046</span>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="counter counter-inverse">
                          <div class="counter-label">Tweets</div>
                          <span class="counter-number">325</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow text-center">
            <div class="widget-header cover overlay">
              <div class="cover-background" style="background-image: url(<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png)">
                <div class="vertical-align padding-horizontal-0">
                  <div class="vertical-align-bottom width-full">
                    <a class="avatar avatar-100 img-bordered bg-white margin-top-20" href="javascript:void(0)">
                      <img src="<?php echo e(URL::to('/')); ?>/global/portraits/17.jpg" alt="">
                    </a>
                    <h3 class="white">Herman Beck</h3>
                    <p class="white"><i class="icon wb-map margin-right-10" aria-hidden="true"></i>United
                      States
                    </p>
                    <button type="button" class="btn btn-primary margin-bottom-20">Follow</button>
                    <div class="row no-space overlay-background">
                      <div class="col-xs-4">
                        <div class="counter counter-inverse">
                          <span class="counter-number">13.2K</span>
                          <div class="counter-label">Followers</div>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="counter counter-inverse">
                          <span class="counter-number">246</span>
                          <div class="counter-label">Following</div>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="counter counter-inverse">
                          <span class="counter-number">32</span>
                          <div class="counter-label">Tweets</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow">
            <div class="widget-header bg-blue-600 white padding-15 clearfix">
              <a class="avatar avatar-lg pull-left margin-right-20" href="javascript:void(0)">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/16.jpg" alt="">
              </a>
              <div class="font-size-18">Robin Ahrens</div>
              <div class="grey-300 font-size-14">Web Designer</div>
            </div>
            <div class="widget-content">
              <ul class="list-group list-group-bordered">
                <li class="list-group-item">
                  <span class="badge badge-success">6</span>
                  <i class="icon wb-inbox" aria-hidden="true" draggable="true"></i>                  Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge badge-info">2</span>
                  <i class="icon wb-user" aria-hidden="true" draggable="true"></i>                  Dapibus ac facilisis in
                </li>
                <li class="list-group-item">
                  <i class="icon wb-bell" aria-hidden="true" draggable="true"></i>                  Morbi leo risus
                </li>
                <li class="list-group-item">
                  <span class="badge badge-info">10</span>
                  <i class="icon wb-info-circle" aria-hidden="true" draggable="true"></i>                  Porta ac consectetur ac
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow">
            <div class="widget-header cover">
              <div class="cover-background padding-30" style="background-image: url('<?php echo e(URL::to('/')); ?>/global/photos/placeholder.png')">
                <blockquote class="cover-quote white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                  nec odio. </blockquote>
              </div>
            </div>
            <div class="widget-body">
              <div class="avatar avatar-sm pull-left margin-right-10 margin-top-5">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/3.jpg" alt="">
              </div>
              <div class="info margin-bottom-25">
                <div class="blue-grey-700 text-uppercase">John Doe</div>
                <div class="blue-grey-400 text-capitalize">Design</div>
              </div>
              <p class="margin-bottom-40">Rudem falso dicitis, curis depravatum affecti stoicos rerum.</p>
              <div class="text-right">
                <a class="text-action" href="javascript:void(0)">
                  <i class="icon wb-heart"></i>
                  <span>23</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 masonry-item">
          <div class="widget widget-shadow">
            <div class="widget-header height-150 bg-blue-600 vertical-align padding-vertical-20 padding-horizontal-25">
              <blockquote class="cover-quote vertical-align-middle white font-size-20">Corporis dicere disputatione laborat quamque. </blockquote>
            </div>
            <div class="widget-body padding-top-0" style="margin-top: -30px">
              <div class="avatar avatar-lg img-bordered bg-white margin-bottom-10">
                <img src="<?php echo e(URL::to('/')); ?>/global/portraits/13.jpg" alt="">
              </div>
              <div class="info margin-bottom-25">
                <div class="blue-grey-700">Sarah Graves</div>
                <div class="blue-grey-400">Developer</div>
              </div>
              <p class="margin-bottom-35 blue-grey-500">Menandri nixam arguerent quanti fecerit laudem vidisse elegantis.
              </p>
              <div class="text-right">
                <a class="text-action" href="javascript:void(0)">
                  <i class="icon wb-heart"></i>
                  <span>16</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<br/>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>