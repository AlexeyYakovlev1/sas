@extends("layouts.student")
@section("title")
	Основное
@stop
@section("styles")
	@vite(["resources/sass/pages/home/students/main.sass"])
@stop
@section("content")
<x-student />
@stop
@section("scripts")
	@vite(["resources/js/pages/home/student/card/main.js"])
@stop