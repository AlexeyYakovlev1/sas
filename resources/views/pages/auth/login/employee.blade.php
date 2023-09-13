@extends("layouts.main")
@section("title")
	Вход (для дирекции)
@stop
@section("styles")
	@vite([
		"resources/sass/pages/auth/main.sass"
	])
@stop
@section("content")
<section class="employee content" id="employee">
	<div>
		<h1 class="content__title">Вход</h1>
		<h2 class="employee__subtitle">Только для сотрудников Дирекции программы «Кадровый резерв»</h2>
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
		<button class="btn__primary red" disabled type="submit">Войти</button>
	</form>
</section>
@stop
@section("scripts")
@vite(["resources/js/pages/auth/employee.login.js"])
@stop