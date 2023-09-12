@extends("layouts.student")
@section("title")
	Документы
@stop
@section("styles")
	@vite(["resources/sass/components/docs.sass"])
@stop
@section("content")
<x-docs />
@stop
@section("scripts")
	{{--  --}}
@stop