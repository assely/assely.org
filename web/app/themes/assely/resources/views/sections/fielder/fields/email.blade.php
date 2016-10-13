@extends('sections.fielder.box')

@section('box.title')
	Email
@overwrite

@section('box.content')
	<input type="email" class="form-control" data-parsley-type="email" required value="example@email.com">
@overwrite