<script type="text/javascript">
	new Vue({
	    el: '#<?php echo e($fingerprint); ?>',
	    data: {
	    	slug: '<?php echo e($slug); ?>',
	    	fields: <?php echo $fields; ?>

	   	}
	});
</script>
