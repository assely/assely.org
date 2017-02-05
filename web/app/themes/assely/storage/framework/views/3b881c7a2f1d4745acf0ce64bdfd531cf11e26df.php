<div class="hero hidden-xs">
	<div class="hero__editor">
		<?php echo $__env->make('header.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<div class="hero__content hidden-sm">
		<div class="hero__panel">
			<h1 class="hero__heading margin-remove">
				A modern WordPress framework.
			</h1>

			<h4 class="hero__lead">
				Brings some freshness to the WordPress theme development.
			</h4>

			<div class="hero__description">
				<a href="<?php echo e($links['docs']); ?>" class="btn">
					Take a peek at documentation
				</a>
			</div>
		</div>

		<div class="hero__shadow"></div>
	</div>
</div>
