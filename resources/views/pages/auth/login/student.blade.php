@extends("layouts.main")
@section("title")
	Вход (для студента)
@stop
@section("styles")
	@vite([
		"resources/sass/pages/auth/main.sass"
	])
@stop
@section("content")
<section class="student content" id="student">
	<div>
		<h1 class="content__title">Вход</h1>
	</div>
	<form class="content__form">
		<input
			class="input__primary"
			type="text"
			name="login"
			placeholder="Логин"
		>
		<input
			class="input__primary"
			type="password"
			name="password"
			placeholder="Пароль"
		>
		<button class="btn__primary red" type="submit">Войти</button>
	</form>
</section>
@stop