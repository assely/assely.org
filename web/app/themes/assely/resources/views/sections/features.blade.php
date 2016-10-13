<div class="features">
	@foreach(array_chunk($features, 3) as $row)
		<div class="features__list row">
			@foreach($row as $feature)
				<div class="col-md-4">
					@include('sections.features.feature')
				</div>
			@endforeach
		</div>
	@endforeach
</div>
