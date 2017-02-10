<?php echo $__env->make('Assely::Components.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('Assely::Components.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('Assely::Components.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="Assely" class="assely">
	<?php echo Nonce::fields($slug); ?>


	<?php echo $__env->yieldContent('content'); ?>
</div>
