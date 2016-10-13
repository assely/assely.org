<?php if ( ! Assely\Helpers\app('Assely\Cache\BladeDirective')->setUp('Docs\Navigation\Sections')) : ?>
	<?php $__currentLoopData = $sections->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<h4><?php echo e($section->title); ?></h4>

		<ul class="list-unstyled">
			<?php $__currentLoopData = $section->posts('docs', [
				'nopaging' => true,
				'orderby' => 'menu_order title',
				'order' => 'ASC'
			]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<li>
					<a href="<?php echo e($chapter->link); ?>">
						<?php echo e($chapter->title); ?>

					</a>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</ul>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endif; echo Assely\Helpers\app('Assely\Cache\BladeDirective')->tearDown(); ?>
