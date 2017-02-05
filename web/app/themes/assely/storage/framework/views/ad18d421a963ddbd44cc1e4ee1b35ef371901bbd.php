<div class="menu clearfix">
	<div class="menu__logotype pull-left">
		<a href="<?php echo e(get_home_url()); ?>">
			<img src="<?php echo e(get_template_directory_uri()); ?>/public/images/assely-framework-logotype.svg" alt="Assely Framework">
		</a>
	</div>

	<nav class="menu__nav pull-right text-right hidden-xs hidden-sm">
		<?php echo $__env->make('header.nav', [
	        'items' => Menu::get('primary')->items()
	    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</nav>
</div>
