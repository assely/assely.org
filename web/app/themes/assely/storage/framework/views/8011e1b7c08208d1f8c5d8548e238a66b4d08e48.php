<?php $__env->startSection('header'); ?>
	<div class="home__header">
		<?php echo $__env->make('header.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="home__content">
    	<?php echo $__env->make('sections.framework', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	    <?php echo $__env->make('sections.fielder', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
	<?php echo $__env->make('sections.more', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('footer.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>