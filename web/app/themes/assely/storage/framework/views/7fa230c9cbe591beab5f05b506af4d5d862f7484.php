<?php $__env->startSection('box.title'); ?>
	Text
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
	<input type="text" class="form-control" data-parsley-maxlength="53" required value="With your feet in the air and your head on the ground">
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>