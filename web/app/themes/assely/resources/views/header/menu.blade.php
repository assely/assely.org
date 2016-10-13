<div class="menu clearfix">
	<div class="menu__logotype pull-left">
		<a href="{{ get_home_url() }}">
			<img src="{{ get_template_directory_uri() }}/public/images/assely-framework-logotype.svg" alt="Assely Framework">
		</a>
	</div>

	<nav class="menu__nav pull-right text-right hidden-xs hidden-sm">
		@include('header.nav', [
	        'items' => Menu::get('primary')->items()
	    ])
	</nav>
</div>
