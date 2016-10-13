<?php $__env->startSection('box.title'); ?>
	Radios
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
	<?php $random = rand();?>

	<ul class="list-unstyled">
		<li>
			<label>
				<input type="radio" name="ExampleRadios<?php echo e($random); ?>" value="foo" class="form-control" data-parsley-pattern="foobar" data-parsley-group="<?php echo e($random); ?>" data-parsley-errors-container="#ExampleRadiosErrors<?php echo e($random); ?>" data-parsley-error-message="You definitely need to choose foobar."> Foo! Foo!
			</label>
		</li>

		<li>
			<label>
				<input type="radio" name="ExampleRadios<?php echo e($random); ?>" value="bar" class="form-control" data-parsley-group="<?php echo e($random); ?>"> No, it should be Bar!
			</label>
		</li>

		<li>
			<label>
				<input type="radio" name="ExampleRadios<?php echo e($random); ?>" class="form-control" value="foobar" data-parsley-group="<?php echo e($random); ?>" checked> Maybe Foobar?
			</label>
		</li>
	</ul>

	<div id="ExampleRadiosErrors<?php echo e($random); ?>"></div>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>