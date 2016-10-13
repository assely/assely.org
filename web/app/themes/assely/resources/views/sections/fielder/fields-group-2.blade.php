<form>
	<div class="row">
		<div class="col-xs-7">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-2-1">
				@include('sections.fielder.fields.tinymce')
			</div>
		</div>

		<div class="col-xs-5">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-2-2">
				<div class="row">
					<div class="col-xs-12">
						@include('sections.fielder.fields.textarea--lorem')
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6">
						@include('sections.fielder.fields.select')
					</div>

					<div class="col-xs-6">
						@include('sections.fielder.fields.password')
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
