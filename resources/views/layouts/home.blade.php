<?php
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
		$link = "https"; 
	else
		$link = "http";

	$link .= "://"; 
	$link .= $_SERVER['HTTP_HOST']; 
	$link .= $_SERVER['REQUEST_URI']; 
	$link_array = explode("/", $link);
	$current_page = end($link_array);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	
	@include("../includes/csrf")

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>

	@vite(["resources/sass/pages/home.sass"])
	@yield("styles")
</head>
<body>
	<main class="home">
		<div class="container">
			<aside class="home__sections">
				<nav class="home__nav">
					<ul class="home__nav-list">
						<li
							class="home__nav-list-item <?php if ($current_page === "general_information") echo "active"; else echo ""; ?>"
						>
							<a href="/general_information">Общая информация</a>
						</li>
						<li
							class="home__nav-list-item <?php if ($current_page === "action_plan") echo "active"; else echo ""; ?>"
						>
							<a href="/action_plan">План мероприятий</a>
						</li>
						<li
							class="home__nav-list-item <?php if ($current_page === "student_movement") echo "active"; else echo ""; ?>"
						>
							<a href="/student_movement">Движение студентов</a>
						</li>
						<li
							class="home__nav-list-item <?php if ($current_page === "students") echo "active"; else echo ""; ?>"
						>
							<a href="/students">Студенты</a>
						</li>
					</ul>
				</nav>
			</aside>
			@yield("content")
		</div>
	</main>

	@yield("scripts")
</body>
</html>