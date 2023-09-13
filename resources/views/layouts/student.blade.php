<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$link = "https";
else
	$link = "http";

$link .= "://"; 
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['REQUEST_URI']; 
$link_array = explode("/", $link);
$student_id = $link_array[5];
$current_page = end($link_array);

$nav_items = [
	[
		"link" => "/home/students/${student_id}/main",
		"point" => "main",
		"name" => "Основное"
	],
	[
		"link" => "/home/students/${student_id}/certification",
		"point" => "certification",
		"name" => "Аттестация"
	],
	[
		"link" => "/home/students/${student_id}/docs",
		"point" => "docs",
		"name" => "Документы"
	],
	[
		"link" => "/home/students/${student_id}/mode_services",
		"point" => "mode_services",
		"name" => "Служба режима"
	],
	[
		"link" => "/home/students/${student_id}/training",
		"point" => "training",
		"name" => "Обучение"
	]
];
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
					<?php
					foreach ($nav_items as $item)
					{
						$cls = "";

						if ($current_page === $item["point"])
						{
							$cls = "active";
						}
						
						$li = "<li class=".$cls.">";
						$li .= "<a href=".$item["link"].">".$item["name"]."</a>";
						$li .= "</li>";

						echo $li;
					}
					?>
				</ul>
			</nav>
		</div>
		<div class="container content">
			@yield("content")
		</div>
	</main>
	<x-footer />
	
	@yield("scripts")
	@vite([
		"resources/js/scripts/loader.js",
		"resources/js/scripts/logout.js",
		"resources/js/scripts/closeAlert.js"
	])
</body>
</html>