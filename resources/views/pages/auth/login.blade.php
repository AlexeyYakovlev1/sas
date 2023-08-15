@extends("layouts.main")
@section("title")
	Вход
@stop
@section("styles")
	@vite(["resources/sass/pages/login.sass"])
@stop
@section("content")
	<section class='login'>
        <div class="login__border">
            <div class="login__container">
                <h3 class="title__primary">Войти как</h3>
				<ul class="login__characters">
                    <li class="login__character btn-active" data-person="employee">
                        <span>Сотрудник дирекции</span>
                    <li class="login__character" data-person="student">
                        <span>Студент</span>
                    </li>
                    <li class="login__character" data-person="director">
                        <span>Руководитель</span>
                    </li>
                </ul>
                <form action="" method="post" class='login__form'>
                    <div class="form__container">
                        <div class="form__item">
                            <label for="">Логин</label>
                            <input
								type="text"
								class="input__primary"
								placeholder="Введите логин"
								data-name="login"
								name="login"
							>
                        </div>
                        <div class="form__item">
                            <label for="">Пароль</label>
                            <input
								type="password"
								class="input__primary"
								placeholder="Введите пароль"
								data-name="password"
								name="password"
							>
                        </div>
                        <button type="submit" class='btn__primary'>Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop
@section("scripts")
	@vite([
		"resources/js/scripts/activeLogin.js",
		"resources/js/pages/auth/login.js"
	])
@stop
