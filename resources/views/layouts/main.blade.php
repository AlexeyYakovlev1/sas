<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	@include("../includes/csrf")

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>

	<link rel="icon" type="image/png" href="/images/favic.png"/>
	
	@vite(["resources/sass/_global.sass"])
	@vite(["resources/js/scripts/loader.js"])
	
	@yield("styles")
</head>
<body>
	@include("../includes/loader")
	@include("../includes/alert")
	
	<main class="main">
		<div class="container">
			@yield("content")
		</div>
	</main>
	
	@yield("scripts")
	@vite(["resources/js/scripts/closeAlert.js"])
</body>
</html>
