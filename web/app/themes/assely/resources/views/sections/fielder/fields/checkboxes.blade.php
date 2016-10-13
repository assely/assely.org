@extends('sections.fielder.box')

@section('box.title')
	Checkboxes
@overwrite

@section('box.content')
	<?php $random = rand();?>

	<ul class="list-unstyled">
		<li>
			<label>
				<input type="checkbox" name="ExampleCheckboxes{{ $random }}" class="form-control" data-parsley-group="{{ $random }}" data-parsley-errors-container="#ExampleCheckboxesErrors{{ $random }}" data-parsley-check="[1, 2]"> Lorem ipsum.
			</label>
		</li>

		<li>
			<label>
				<input type="checkbox" name="ExampleCheckboxes{{ $random }}" class="form-control" data-parsley-group="{{ $random }}" checked> Lorem ipsum.
			</label>
		</li>

		<li>
			<label>
				<input type="checkbox" name="ExampleCheckboxes{{ $random }}" class="form-control" data-parsley-group="{{ $random }}"> Lorem ipsum.
			</label>
		</li>
	</ul>

	<div id="ExampleCheckboxesErrors{{ $random }}"></div>
@overwrite