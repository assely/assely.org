<div id="offcanvas" class="offcanvas">
	<div class="offcanvas__wrapper">
		<div class="offcanvas__menu offcanvas__section">
		    @include('offcanvas.nav.items', [
				'items' => Menu::get('primary')->items()
			])
		</div>

		<div class="offcanvas__menu offcanvas__section">
			@include('docs.nav.sections')
		</div>
	</div>
</div>
