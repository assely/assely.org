<div class="editor">
	<div class="editor__bar">
		<ul class="editor__nav list-inline">
			<li class="editor__btn"></li>
			<li class="editor__btn"></li>
			<li class="editor__btn"></li>
		</ul>
	</div>

	<div class="editor__content">
		<pre class="language-php"><code><?php echo $__env->make('header.editor-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></code></pre>
	</div>
</div>
