<div class="feature media">
	<div class="feature__left media-left">
		<?php echo $__env->make("sections.features.icons.{$feature['icon']}", [
			'name' => $feature['icon']
		], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<div class="feature__body media-body">
		<h4 class="feature__heading media-heading"><?php echo $feature['title']; ?></h4>

		<p class="feature__content"><?php echo $feature['content']; ?></p>
	</div>
</div>
