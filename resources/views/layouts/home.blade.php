<?php
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
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
	@vite(["resources/js/scripts/loader.js"])
	@yield("styles")
</head>
<body>
	@include("../includes/loader")
	@include("../includes/alert")
	<main class="home">
		<div class="container">
			<aside class="home__sections">
				<nav class="home__nav">
					<ul class="home__nav-list">
						<li
							class="home__nav-list-item <?php if ($current_page === "general_information") echo "active"; else echo ""; ?>"
						>
							<a href="/home/general_information">Общая информация</a>
						</li>
						<li
							class="home__nav-list-item <?php if ($current_page === "action_plan") echo "active"; else echo ""; ?>"
						>
							<a href="/home/action_plan">План мероприятий</a>
						</li>
						@if ($student_movement)
							<li
								class="home__nav-list-item <?php if ($current_page === "student_movement") echo "active"; else echo ""; ?>"
							>
								<a href="/home/student_movement">Движение студентов</a>
							</li>
						@endif
						@if ($employees)
							<li
								class="home__nav-list-item <?php if ($current_page === "employees") echo "active"; else echo ""; ?>"
							>
								<a href="/home/employees">Сотрудники</a>
							</li>
						@endif
						@if ($students)
							<li
								class="home__nav-list-item <?php if ($current_page === "students") echo "active"; else echo ""; ?>"
							>
								<a href="/home/students">Студенты</a>
							</li>
						@endif
						@if ($student_list)
							<li
								class="home__nav-list-item <?php if ($current_page === "list") echo "active"; else echo ""; ?>"
							>
								<a href="/home/students/list">Аттестационный лист</a>
							</li>
						@endif
						<li class="home__nav-list-item logout">
							<a href="/auth/logout">Выйти</a>
						</li>
					</ul>
				</nav>
			</aside>
			<div class="home__content">
				@yield("content")
			</div>
		</div>
	</main>

	@yield("scripts")
	@vite(["resources/js/scripts/closeAlert.js"])
</body>
</html>