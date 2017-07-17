<ul class="list-unstyled">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <li>
            <a href="<?php echo e($item->link); ?>">
                <?php echo e($item->title); ?>

            </a>

            <?php if($item->hasChildren()): ?>
                <?php echo $__env->make('offcanvas.nav.items', [
                    'items' => $item->children
                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>
