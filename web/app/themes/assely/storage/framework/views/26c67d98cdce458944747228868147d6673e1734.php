<header class="header section">
	<div class="container">
		<div class="header__wrapper">
			<div class="row">
				<div class="header__navbar">
					<div class="col-md-12">
						<?php echo $__env->make('header.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
			</div>

			<div class="row hidden-xs">
				<div class="header__hero clearfix">
					<div class="col-md-12">
						<?php echo $__env->make('header.hero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
