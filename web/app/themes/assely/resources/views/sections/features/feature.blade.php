<div class="feature media">
	<div class="feature__left media-left">
		@include("sections.features.icons.{$feature['icon']}", [
			'name' => $feature['icon']
		])
	</div>

	<div class="feature__body media-body">
		<h4 class="feature__heading media-heading">{!! $feature['title'] !!}</h4>

		<p class="feature__content">{!! $feature['content'] !!}</p>
	</div>
</div>
