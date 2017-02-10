<?php $__env->startSection('content'); ?>
	<div class="fielder-field" :class="`fielder-field--${field.type}`">
		<input
			v-model="field.value"
			:data-uuid="field.uuid"
			:placeholder="field.arguments.placeholder"
			:value="field.value"
			:name="`${namespace}[${field.slug}]`"
			class="fielder-field__input"
			type="text"
		/>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Fielder::template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>