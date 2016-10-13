<?php $__env->startSection('box.title'); ?>
	Select
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
	<select class="field field--select form-control">
		<option>Choose option</option>
		<option>Default option</option>
		<option>Good option</option>
	</select>
<?php $__env->stopSection(true); ?>

<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>