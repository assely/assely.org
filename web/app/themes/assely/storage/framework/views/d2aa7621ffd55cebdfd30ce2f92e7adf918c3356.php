<div class="features">
	<?php $__currentLoopData = array_chunk($features, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<div class="features__list row">
			<?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<div class="col-md-4">
					<?php echo $__env->make('sections.features.feature', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</div>
