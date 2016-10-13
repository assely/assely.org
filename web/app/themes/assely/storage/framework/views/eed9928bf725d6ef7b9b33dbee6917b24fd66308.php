<form>
	<div class="row">
		<div class="col-xs-7">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-2-1">
				<?php echo $__env->make('sections.fielder.fields.tinymce', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>

		<div class="col-xs-5">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-2-2">
				<div class="row">
					<div class="col-xs-12">
						<?php echo $__env->make('sections.fielder.fields.textarea--lorem', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<?php echo $__env->make('sections.fielder.fields.select', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>

					<div class="col-xs-6">
						<?php echo $__env->make('sections.fielder.fields.password', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
