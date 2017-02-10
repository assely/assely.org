<?php $__env->startSection('content'); ?>
	<div id="<?php echo e($fingerprint); ?>" class="assely-metabox">
		<assely-fields
			v-for="field in fields"
			:fields="field"
			:namespace="slug"
		></assely-fields>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Assely::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>