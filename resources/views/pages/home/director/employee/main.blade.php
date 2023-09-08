@extends("layouts.employee")
@section("title")
	Основное
@stop
@section("styles")
	@vite(["resources/sass/pages/home/employee/main.sass"])
@stop
@section("content")
<x-student />
@stop
@section("scripts")
	{{--  --}}
@stop