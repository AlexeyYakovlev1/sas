@extends("layouts.home")
@section("title")
	Общая информация
@stop
@section("styles")
	
@stop
@section("content")
	<div class="information">
		<h1>Необходимые документы</h1>
		@if (in_array($person, ["director", "employee"]))
			<button class="btn__primary information__button">
				Загрузить файлы
			</button>
		@endif
		<div>
			<h2>Список документов</h2>
		</div>
	</div>
@stop
@section("scripts")

@stop
