<section class="fielder section section--gradient">
	<div class="fielder__header section__header clearfix">
		@include('sections.fielder.carousel')
	</div>

	<div class="container">
		<div class="fielder__content section__content">
			<div class="row text-center">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
					<div class="heading">
						<h6 class="fielder__subtitle heading__subtitle">Fielder</h6>

						<h2 class="fielder__title heading__title">Powerful Custom Fields.</h2>

						<p class="fielder__lead heading__lead">
							The Fielder is a collection of various custom fields that you can seamlessly use with the Assely framework and its singularities. Shape your data as much as you like.
						</p>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-lg-8 col-lg-push-2 text-center">
					<a href="{{ $links['fielder'] }}" class="btn btn-secondary btn-secondary--success btn-shadow">Read the guide →</a>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 col-lg-push-1">
					@cache('Home\Sections\Fielder\Features')
						@include('sections.features', [
							'features' => [
								[
									'icon' => 'fields',
									'title' => 'Various<br>field types',
									'content' => 'An extensive collection of different field types. Colorpicker, date picker, media file, repeatable etc. There is plenty to choose from.'
								],
								[
									'icon' => 'validation',
									'title' => 'Fields<br>validation',
									'content' => 'Live validation with readable and user-friendly alerts. Pure pleasure to filling up.'
								],
								[
									'icon' => 'sanitization',
									'title' => 'Fields<br>sanitization',
									'content' => 'Easy fields values sanitization with built-in or custom callbacks. Nothing unwanted will slip through.'
								]
							]
						])
					@endcache
				</div>
			</div>
		</div>
	</div>
</section>
