<div class="post post--{{ $doc->slug }}">
	<h1 class="post__title">{{ $doc->title }}</h1>

	<div class="post__content">
		@shortcodes
			{!! $doc->content !!}
		@endshortcodes
	</div>
</div>