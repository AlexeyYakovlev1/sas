<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>404 | Кадровый Резерв</title>
	@vite(["resources/sass/errors/404.sass", "resources/sass/_global.sass"])
</head>
<body>
	<x-header :auth="false" />
	<main class="main">
		<div class="content">
			<h2 class="title__section">
				<span>Ошибка 404.</span>
				<span>Страница не найдена</span>
			</h2>
			<p class="description">
				Извините, запрашиваемая вами
				страница не существует. Проверьте
				правильность написания адреса.
			</p>
			<button class="btn__primary red">
				<a href="/auth/login/main">На главную</a>
			</button>
		</div>
	</main>
	<x-footer />
</body>
</html>