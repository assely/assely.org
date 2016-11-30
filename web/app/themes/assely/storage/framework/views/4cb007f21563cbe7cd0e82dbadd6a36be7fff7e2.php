<?php $__env->startSection('header'); ?>
    <div class="docs__header clearfix">
        <div class="col-md-12">
            <?php echo $__env->make('header.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <div class="docs__wrapper">
        <div class="docs__sidebar hidden-xs hidden-sm">
            <div class="col-md-12">
                <?php echo $__env->make('docs.nav.sections', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>

        <div class="docs__content">
            <div class="docs__search">
                <?php echo $__env->make('docs.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>

            <div class="docs__post clearfix">
                <div class="col-md-12">
                    <?php echo $__env->make('docs.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>