@extends("layouts.home")
@section("title")
	Общая информация
@stop
@section("styles")
	
@stop
@section("content")
	<div class="information">
		<h1 class="information__title">Список необходимых документов</h1>
		<ul class="information__list"></ul>
	</div>
@stop
@section("scripts")
	@vite([
		"resources/js/pages/generalInformation/renderStudents.js"
	])
@stop
