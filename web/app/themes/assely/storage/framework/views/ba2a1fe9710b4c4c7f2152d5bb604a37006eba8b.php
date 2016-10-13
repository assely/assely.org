<?php $__env->startSection('box.title'); ?>
	Email
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
	<input type="email" class="form-control" data-parsley-type="email" required value="example@email.com">
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>