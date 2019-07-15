
<?php $__env->startSection('content'); ?>
<div class="page-header">
  <h1 class="page-title font_lato"><?php echo e(trans('app.users_import_fields_specified')); ?></h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="<?php echo e(URL::to('/dashboard')); ?>"><?php echo e(trans('app.home')); ?></a></li>
		<li><a href="<?php echo e(URL::to('userlist')); ?>"><?php echo e(trans('app.users')); ?></a></li>
		<li class="active"><?php echo e(trans('app.import')); ?></li>
	</ol>
  </div>
</div>
<!------------------------start insert, update, delete message ---------------->
<div class="page-content" ng-app="">	
<div class="panel">
<div class="panel-body container-fluid">
<div class="col-lg-12">
<?php if(session('msg_success')): ?>
	<div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  <?php echo e(session('msg_success')); ?>

	</div>
<?php endif; ?>
<?php if(session('msg_update')): ?>
	<div class="alert dark alert-icon alert-info alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  <?php echo e(session('msg_update')); ?>

	</div>
<?php endif; ?>
<?php if(session('msg_delete')): ?>
	<div class="alert dark alert-icon alert-danger alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  <?php echo e(session('msg_delete')); ?>

	</div>
<?php endif; ?>
</div>
<table class="table">
<thead>
<tr>
	<td><?php echo e(trans('app.first_name')); ?>:</td>
	<td><?php echo e(trans('app.import_first_name_specified')); ?></td>
</tr>
<tr>
	<td><?php echo e(trans('app.last_name')); ?>:</td>
	<td><?php echo e(trans('app.import_last_name_specified')); ?></td>
</tr>
</thead>
<tbody>
	<tr>
		<th><?php echo e(trans('app.username')); ?>:</th>
		<td><?php echo e(trans('app.import_username_specified')); ?></td>
	</tr>
	<tr>
		<th><?php echo e(trans('app.email')); ?>:</th>
		<td><?php echo e(trans('app.import_email_specified')); ?></td>
	</tr>
	<tr>
		<th><?php echo e(trans('app.password')); ?>:</th>
		<td><?php echo e(trans('app.import_password_specified')); ?></td>
	</tr>			
	<tr>
		<th><?php echo e(trans('app.phone')); ?>:</th>
		<td><?php echo e(trans('app.import_phone_specified')); ?></td>
	</tr>
	<tr>
		<th><?php echo e(trans('app.gender')); ?>:</th>
		<td><?php echo e(trans('app.import_gender_specified')); ?></td>
	</tr>
	<tr>
		<th><?php echo e(trans('app.address')); ?>:</th>
		<td><?php echo e(trans('app.import_address_specified')); ?></td>
	</tr>			
	<tr>
		<th><?php echo e(trans('app.status')); ?>:</th>
		<td><?php echo e(trans('app.import_status_specified')); ?></td>
	</tr>		
									
</tbody>
</table>

<form name="userForm" action="<?php echo e(URL::to('importcsv')); ?>" ng-submit="submitForm(userForm.$valid)"  method="post" accept-charset="utf-8" enctype="multipart/form-data" class="ng-pristine ng-valid">
<?php echo e(csrf_field()); ?>		

<div class="col-md-4">
<div class="input file"><label for="submittedfile"><?php echo e(trans('app.import_upload_xlscsv_specified')); ?></label>
	<input ng-model="file" type="file" name="file" class="form-control" >
</div>	
</div>
<div style="clear:both;"></div>
<div class="col-md-6">
	<br>
 <div class="bs-example" data-example-id="single-button-dropdown">
		<div class="btn-group">
			<a href="<?php echo e(URL::to('userlist')); ?>" class="btn btn-info btn-group"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back</a>   		</div>
		<div class="btn-group">
		<a class="btn btn-default" href="<?php echo e(URL::to('images/example_main.xls')); ?>"><span class="glyphicon glyphicon-download-alt"></span>  Dowload Sample</a>		
		</div>
		<div class="btn-group">
			<button type="submit" ng-disabled="userForm.$invalid" class="btn btn-primary btn-group loadingclick" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading.."><i class="fa fa-save"></i>  Submit</button>	
		</div>
		
	</div>
</div>
</form>
<div style="clear:both"></div>
</div>
</div>
</div><br/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>