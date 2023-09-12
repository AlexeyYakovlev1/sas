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

	<meta name="viewport" content="width=device-width, initial/home/employee-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>
	
	@yield("styles")
	@vite([
		"resources/sass/pages/home/students/layout.sass",
		"resources/sass/_global.sass"
	])
</head>
<body>
	<x-header/>
	<x-loader/>
	<x-alert/>
	<main class="employee" id="employee">
		<div class="employee__header container content">
			<nav class="employee__header-nav">
				<ul>
					<li class="<?php if ($current_page === "main") echo "active" ?>">
						<a href="/home/students/1/main">Основное</a>
					</li>
					<li class="<?php if ($current_page === "certification") echo "active" ?>">
						<a href="/home/students/1/certification">Аттестация</a>
					</li>
					<li class="<?php if ($current_page === "docs") echo "active" ?>">
						<a href="/home/students/1/docs">Документы</a>
					</li>
					<li class="<?php if ($current_page === "mode_services") echo "active" ?>">
						<a href="/home/students/1/mode_services">Служба режима</a>
					</li>
					<li class="<?php if ($current_page === "training") echo "active" ?>">
						<a href="/home/students/1/training">Обучение</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="container content">
			@yield("content")
		</div>
	</main>
	<x-footer />
	
	@yield("scripts")
	@vite(["resources/js/scripts/loader.js"])
</body>
</html>