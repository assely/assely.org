<div id="offcanvas" class="offcanvas">
	<div class="offcanvas__wrapper">
		<div class="offcanvas__menu offcanvas__section">
		    <?php echo $__env->make('offcanvas.nav.items', [
				'items' => Menu::get('primary')->items()
			], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

		<div class="offcanvas__menu offcanvas__section">
			<?php echo $__env->make('docs.nav.sections', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
</div>
