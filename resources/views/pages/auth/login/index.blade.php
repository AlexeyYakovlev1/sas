@extends("layouts.main")
@section("title")
	Вход (главная)
@stop
@section("styles")
	@vite([
		"resources/sass/pages/auth/main.sass"
	])
@stop
@section("content")
<section class="content">
	<h1 class="content__title">Авторизация</h1>
	<ul class="authorization__list">
		<li class="authorization__list-item">
			<button class="btn__primary red">
				<a href="/auth/login/employee">Вход</a>
			</button>
			<small class="authorization__list-item-description">
				Только для сотрудников Дирекции программы
				«Кадровый резерв»
			</small>
		</li>
		<li class="authorization__list-item">
			<button class="btn__primary small">
				<a href="/auth/login/student">Студент</a>
			</button>
		</li>
		<li class="authorization__list-item">
			<button class="btn__primary small">
				<a href="/auth/login/director">Руководитель</a>
			</button>
		</li>
	</ul>
</section>
@stop