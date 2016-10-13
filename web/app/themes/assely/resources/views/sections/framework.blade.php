<section class="framework section">
	<div class="container">
		<div class="framework__content section__content">
			<div class="row text-center">
				<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
					<div class="heading">
						<h6 class="framework__subtitle heading__subtitle">Framework</h6>

						<h1 class="framework__title heading__title">Take your WordPress development experience to the new level.</h1>

						<p class="framework__lead heading__lead">
							The Assely framework introduces some standarized and comfortable ways for creating WordPress powered applications. Develop structured, easily scalable and complex WordPress websites and web applications with truly pleasure.
						</p>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-lg-8 col-lg-push-2">
					<a href="{{ $links['docs'] }}" class="btn btn-secondary btn-secondary--danger btn-shadow">Get started →</a>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 col-lg-push-1">
					@include('sections.features', [
						'features' => [
							[
								'icon' => 'routes',
								'title' => 'Enhanced<br>routing',
								'content' => 'Simply tell resources it have respond to. No more slugging around with bounch of files.'
							],
							[
								'icon' => 'templates',
								'title' => 'Laravel Blade templates',
								'content' => 'Powerful templating engine brought from Laravel. Beautiful layouts with zero effort.'
							],
							[
								'icon' => 'assets',
								'title' => 'Assets<br>management',
								'content' => 'Add, load and queue. In pair with Laravel Elixir you  have the real control over providing application assets.'
							],
							[
								'icon' => 'posttypes',
								'title' => 'Custom<br>post types',
								'content' => 'Create different types of content and complex structures with true ease.'
							],
							[
								'icon' => 'metaboxes',
								'title' => 'Custom<br>metaboxes',
								'content' => 'Bundle your custom fields in reusable boxes and assign with readable relationships.'
							],
							[
								'icon' => 'taxonomies',
								'title' => 'Custom<br>taxonomies',
								'content' => 'Organize your posts with custom taxonomies. Hand in hand with power of custom fields for terms.'
							],
							[
								'icon' => 'bedrock',
								'title' => 'Works great<br>with Bedrock',
								'content' => 'Cleaner folder structure, easer configuration and environment variables. Sweet!'
							],
							[
								'icon' => 'wp-cli',
								'title' => 'For terminal<br>lovers',
								'content' => 'Assely comes with bunch of handy WP-CLI commands. Scaffolding, inspecting and managing. You will love it.'
							],
							[
								'icon' => 'laravel',
								'title' => 'Laravel as<br>foundation',
								'content' => 'Assely is based on Laravel core components. Solid foundation for your next WordPress website.'
							]
						]
					])
				</div>
			</div>
		</div>
	</div>
</section>
