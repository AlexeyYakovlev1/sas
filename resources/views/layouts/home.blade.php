<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	
	@include("../includes/csrf")

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>

	@vite(["resources/sass/pages/home/index.sass"])
	@yield("styles")
</head>
<body>
	<main class="main">
		<div class="container">
			<header>
				<nav>
					<ul>
						<li>
							<a href="/general_information">Общая информация</a>
						</li>
						<li>
							<a href="/action_plan">План мероприятий</a>
						</li>
						<li>
							<a href="/student_movement">Движение студентов</a>
						</li>
						<li>
							<a href="/students">Студенты</a>
						</li>
					</ul>
				</nav>
			</header>
			@yield("content")
		</div>
	</main>

	@yield("scripts")
</body>
</html>