@extends('sections.fielder.box')

@section('box.title')
	Radios
@overwrite

@section('box.content')
	<?php $random = rand();?>

	<ul class="list-unstyled">
		<li>
			<label>
				<input type="radio" name="ExampleRadios{{ $random }}" value="foo" class="form-control" data-parsley-pattern="foobar" data-parsley-group="{{ $random }}" data-parsley-errors-container="#ExampleRadiosErrors{{ $random }}" data-parsley-error-message="You definitely need to choose foobar."> Foo! Foo!
			</label>
		</li>

		<li>
			<label>
				<input type="radio" name="ExampleRadios{{ $random }}" value="bar" class="form-control" data-parsley-group="{{ $random }}"> No, it should be Bar!
			</label>
		</li>

		<li>
			<label>
				<input type="radio" name="ExampleRadios{{ $random }}" class="form-control" value="foobar" data-parsley-group="{{ $random }}" checked> Maybe Foobar?
			</label>
		</li>
	</ul>

	<div id="ExampleRadiosErrors{{ $random }}"></div>
@overwrite