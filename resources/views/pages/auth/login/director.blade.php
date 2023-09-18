@extends("layouts.main")
@section("title")
	Вход (для руководителя)
@stop
@section("styles")
	@vite([
		"resources/sass/pages/auth/main.sass"
	])
@stop
@section("content")
<section class="director content" id="director">
	<div>
		<h1 class="content__title">Вход</h1>
	</div>
	<form class="content__form">
		<input
			class="input__primary"
			type="text"
			name="username"
			placeholder="Логин"
		>
		<input
			class="input__primary"
			type="password"
			name="password"
			placeholder="Пароль"
		>
		<button class="btn__primary red" type="submit" disabled>Войти</button>
	</form>
</section>
@stop
@section("scripts")
@vite(["resources/js/pages/auth/director.login.js"])
@stop