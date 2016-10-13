<?php $__env->startSection('box.title'); ?>
	Checkboxes
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
	<?php $random = rand();?>

	<ul class="list-unstyled">
		<li>
			<label>
				<input type="checkbox" name="ExampleCheckboxes<?php echo e($random); ?>" class="form-control" data-parsley-group="<?php echo e($random); ?>" data-parsley-errors-container="#ExampleCheckboxesErrors<?php echo e($random); ?>" data-parsley-check="[1, 2]"> Lorem ipsum.
			</label>
		</li>

		<li>
			<label>
				<input type="checkbox" name="ExampleCheckboxes<?php echo e($random); ?>" class="form-control" data-parsley-group="<?php echo e($random); ?>" checked> Lorem ipsum.
			</label>
		</li>

		<li>
			<label>
				<input type="checkbox" name="ExampleCheckboxes<?php echo e($random); ?>" class="form-control" data-parsley-group="<?php echo e($random); ?>"> Lorem ipsum.
			</label>
		</li>
	</ul>

	<div id="ExampleCheckboxesErrors<?php echo e($random); ?>"></div>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>