<?php $__env->startSection('content'); ?>
	<tr class="form-field">
		<th scope="row">
			<label></label>
		</th>

		<td>
			<div id="<?php echo e($fingerprint); ?>" class="assely-taxonomy pure-g no-gutter">
				<assely-fields
					v-for="field in fields"
					:fields="field"
					:namespace="slug"
				></assely-fields>
			</div>
		</td>
	</tr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Assely::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>