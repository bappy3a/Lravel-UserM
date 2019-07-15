@extends('layouts.template')
@section('content')
<div class="page-header">
  <h1 class="page-title font_lato">{{ trans('app.update_permission')}}</h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li><a href="{{URL::to('/permissions')}}">{{ trans('app.permissions')}}</a></li>
		<li class="active">{{ trans('app.edit')}}</li>
	</ol>
  </div>
</div>
<div class="page-content" ng-app="">	
<div class="panel">
<div class="panel-body container-fluid">
<!------------------------start insert, update, delete message ---------------->
<div class="col-lg-12">
@if(session('msg_success'))
	<div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  {{session('msg_success')}}
	</div>
@endif
@if(session('msg_update'))
	<div class="alert dark alert-icon alert-info alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  {{session('msg_update')}}
	</div>
@endif
@if(session('msg_delete'))
	<div class="alert dark alert-icon alert-danger alert-dismissible alertDismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	  </button>
	  <i class="icon wb-check" aria-hidden="true"></i> 
	  {{session('msg_delete')}}
	</div>
@endif
</div>
<div class="row">
<div class="col-lg-12">	 
<form name="userForm" action="{{URL::to('PermissionController/update')}}/{{$permissiondata->id}}" method="post" novalidate="">
{{ csrf_field() }}
<div class="col-md-6 row">
	<div class="form-group">
		<label class="control-label">{{ trans('app.permission_name')}}</label>
		<input type="text" required class="form-control" ng-model="name" id="name" name="name" ng-init="name = '{{$permissiondata->name}}'" value="{{$permissiondata->name}}">
	</div>
	<div class="form-group">
		<label class="control-label">{{ trans('app.display_name')}}</label>
		<input type="text" required  class="form-control" ng-model="display_name" id="display_name" name="display_name" placeholder="display_name Name" ng-init="display_name = '{{$permissiondata->display_name}}'" value="{{$permissiondata->display_name}}">
	</div>
	<div class="form-group">
		<label class="control-label">{{ trans('app.description')}}</label>
		<textarea name="description"  ng-model="description" id="description" class="form-control" ng-init="description = '{{$permissiondata->description}}'"> {{$permissiondata->description}}</textarea>
	</div>
	
	<div class="bs-example" data-example-id="single-button-dropdown">
<button type="submit" ng-disabled="userForm.$invalid" class="btn btn-primary ladda-button" data-plugin="ladda" data-style="expand-left">
 <span aria-hidden="true" class="glyphicon glyphicon-refresh"></span>{{ trans('app.update_permission')}} 
  <span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
 </button>
  
</div>
</div>	

</form>		
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
</div>
</div>
@stop



