<ul class="menu__items list-inline">
	<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<li class="menu__item">
			<?php if($item->hasChildren()): ?>
				<div class="menu__dropdown btn-group">
					<button type="button" class="menu__dropdown-link menu__link btn btn-link dropdown-toggle" data-toggle="dropdown">
						<?php echo e($item->title); ?>

					</button>
					<ul class="menu__dropdown-menu dropdown-menu dropdown-menu-right">
						<?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<li>
								<a href="<?php echo e($child->link); ?>">
									<?php echo e($child->title); ?>

								</a>
							</li>
		                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</ul>
				</div>
            <?php else: ?>
            	<a href="<?php echo e($item->link); ?>" class="menu__link btn btn-link">
					<?php echo e($item->title); ?>

				</a>
            <?php endif; ?>
		</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</ul>
