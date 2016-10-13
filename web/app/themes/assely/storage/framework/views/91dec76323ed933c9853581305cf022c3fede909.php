<?php $__env->startSection('box.title'); ?>
	Password
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
	<input type="password" class="form-control" required value="123456789sosecure">
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>