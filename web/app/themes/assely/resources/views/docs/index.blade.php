@extends('layout')

@section('header')
    <div class="docs__header clearfix">
        <div class="col-md-12">
            @include('header.menu')
        </div>
    </div>
@endsection

@section('main')
    <div class="docs__wrapper">
        <div class="docs__sidebar hidden-xs hidden-sm">
            <div class="col-md-12">
                @include('docs.nav.sections')
            </div>
        </div>

        <div class="docs__content">
            <div class="docs__search">
                @include('docs.search')
            </div>

            <div class="docs__post clearfix">
                <div class="col-md-12">
                    @include('docs.post')
                </div>
            </div>
        </div>
    </div>
@endsection
