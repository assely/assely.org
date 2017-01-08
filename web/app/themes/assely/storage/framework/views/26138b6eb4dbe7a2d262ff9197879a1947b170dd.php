<div class="post post--<?php echo e($doc->slug); ?>">
	<h1 class="post__title"><?php echo e($doc->title); ?></h1>

	<div class="post__content">
		<?php Assely\Helpers\app('Assely\View\Directives\Shortcodes')->setUp(); ?>
			<?php echo $doc->content; ?>

		<?php echo Assely\Helpers\app('Assely\View\Directives\Shortcodes')->tearDown(); ?>
	</div>
</div>