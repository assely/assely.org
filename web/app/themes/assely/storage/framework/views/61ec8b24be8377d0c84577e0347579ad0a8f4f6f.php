<?php $__env->startSection('box.title'); ?>
	Textarea
<?php $__env->stopSection(true); ?>

<?php $__env->startSection('box.content'); ?>
<textarea class="form-control" rows="6" data-parsley-minlength="125" required>Silence is golden
But my eyes still see.
Silence is golden, golden;
But my eyes still see.

~ The Tremeloes - Silence is Golden</textarea>
<?php $__env->stopSection(true); ?>
<?php echo $__env->make('sections.fielder.box', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>