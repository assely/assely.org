<ul class="menu__items list-inline">
	@foreach($items as $item)
		<li class="menu__item">
			@if($item->hasChildren())
				<div class="menu__dropdown btn-group">
					<button type="button" class="menu__dropdown-link menu__link btn btn-link dropdown-toggle" data-toggle="dropdown">
						{{ $item->title }}
					</button>
					<ul class="menu__dropdown-menu dropdown-menu dropdown-menu-right">
						@foreach($item->children as $child)
							<li>
								<a href="{{ $child->link }}">
									{{ $child->title }}
								</a>
							</li>
		                @endforeach
					</ul>
				</div>
            @else
            	<a href="{{ $item->link }}" class="menu__link btn btn-link">
					{{ $item->title }}
				</a>
            @endif
		</li>
	@endforeach
</ul>
