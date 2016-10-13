<form>
	<div class="row">
		<div class="col-xs-5">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-1-1">
				<div class="row">
					<div class="col-xs-6">
						<?php echo $__env->make('sections.fielder.fields.checkboxes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>

					<div class="col-xs-6">
						<?php echo $__env->make('sections.fielder.fields.radios', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<?php echo $__env->make('sections.fielder.fields.email', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-4">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-1-2">
				<?php echo $__env->make('sections.fielder.fields.textarea--song', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<?php echo $__env->make('sections.fielder.fields.text', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>

		<div class="col-xs-3">
			<div class="fielder__carousel-fields">
				<?php echo $__env->make('sections.fielder.fields.checkboxes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

				<?php echo $__env->make('sections.fielder.fields.radios', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
</form>
