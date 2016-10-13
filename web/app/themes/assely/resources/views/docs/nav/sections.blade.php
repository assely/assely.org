@cache('Docs\Navigation\Sections')
	@foreach($sections->all() as $section)
		<h4>{{ $section->title }}</h4>

		<ul class="list-unstyled">
			@foreach($section->posts('docs', [
				'nopaging' => true,
				'orderby' => 'menu_order title',
				'order' => 'ASC'
			]) as $chapter)
				<li>
					<a href="{{ $chapter->link }}">
						{{ $chapter->title }}
					</a>
				</li>
			@endforeach
		</ul>
	@endforeach
@endcache
