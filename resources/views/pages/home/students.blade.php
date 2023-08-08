@extends("layouts.home")
@section("title")
	Студенты
@stop
@section("styles")
	
@stop
@section("content")
	<div class="students">
		<div class="students__header">
			<input
				class="students__input input__primary"
				type="text"
				placeholder="Искать студента по ФИО..."
			/>
			<button
				class="students__btn-filter btn__primary"
			>
				Открыть фильтры
			</button>
		</div>
		<article class="students__content">
			<p>Список студентов...</p>
		</article>
	</div>
@stop
@section("scripts")

@stop
