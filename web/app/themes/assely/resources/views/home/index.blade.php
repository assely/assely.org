@extends('layout')

@section('header')
	<div class="home__header">
		@include('header.header')
	</div>
@endsection

@section('main')
    <div class="home__content">
    	@cache('Home\Sections\Framework')
	    	@include('sections.framework')
	    @endcache

	    @include('sections.fielder')
    </div>
@endsection


@section('footer')
	@include('sections.more')

    @include('footer.footer')
@endsection
