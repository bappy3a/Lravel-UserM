
<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
<br/>
<div class="row">
<div class="col-lg-12">
 <div class="table-responsive">
<table class="table" id="testTable">
  <thead>
	<tr>
	  <th><?php echo e(trans('app.first_name')); ?> <?php echo e(trans('app.last_name')); ?></th>
	  <th><?php echo e(trans('app.email')); ?></th>
	  <th><?php echo e(trans('app.phone')); ?></th>
	  <th><?php echo e(trans('app.status')); ?></th>	  
	</tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $userdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	  <td><?php echo e($view->first_name); ?> <?php echo e($view->last_name); ?> </td>
	  <td><?php echo e($view->email); ?></td>
	  <td><?php echo e($view->phone); ?></td>
	  <td><?php echo e($view->status); ?></td>
	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<div style="clear:both;"></div>
<!-- /.row (nested) -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script>
    window.print();
</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>