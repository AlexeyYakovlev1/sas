@extends("layouts.main")
@section("title")
	Рабочая страница
@stop
@section("styles")
	@vite(["resources/sass/pages/home.sass"])
@stop
@section("content")
	<header>
		<nav>
			<ul>
				<li>
					<a href="#">Общая информация</a>
				</li>
				<li>
					<a href="#">План мероприятий</a>
				</li>
				<li>
					<a href="#">Движение студентов</a>
				</li>
				<li>
					<a href="#">Студенты</a>
				</li>
			</ul>
		</nav>
	</header>
@stop
@section("scripts")
	@vite(["resources/js/pages/auth/login.js"])
@stop