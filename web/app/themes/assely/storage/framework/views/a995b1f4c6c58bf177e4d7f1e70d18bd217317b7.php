<?php $__env->startSection('main'); ?>
	<div class="error404__content text-center">
		<div class="heading">
			<h6 class="error404__subtitle heading__subtitle">404</h6>

			<h2 class="error404__title heading__title">HEYYEYAAEYAAAEYAEYAA!</h2>

			<p class="error404__lead heading__lead">
				You should't turn up here. What's goin' on?<br>The page you are looking for do not exist, but since you're here we say hey!
			</p>
		</div>

		<div class="error404__video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ZZ5LpwO-An4" frameborder="0" allowfullscreen></iframe>
		</div>

		<a href="<?php echo e(home_url()); ?>" class="error404__btn btn btn-secondary btn-secondary--primary-dark btn-shadow">Get back to the homepage</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>