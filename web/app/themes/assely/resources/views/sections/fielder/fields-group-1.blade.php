<form>
	<div class="row">
		<div class="col-xs-5">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-1-1">
				<div class="row">
					<div class="col-xs-6">
						@include('sections.fielder.fields.checkboxes')
					</div>

					<div class="col-xs-6">
						@include('sections.fielder.fields.radios')
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						@include('sections.fielder.fields.email')
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-4">
			<div class="fielder__carousel-fields fielder__carousel-fields--group-1-2">
				@include('sections.fielder.fields.textarea--song')

				@include('sections.fielder.fields.text')
			</div>
		</div>

		<div class="col-xs-3">
			<div class="fielder__carousel-fields">
				@include('sections.fielder.fields.checkboxes')

				@include('sections.fielder.fields.radios')
			</div>
		</div>
	</div>
</form>
