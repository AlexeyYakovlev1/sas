<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	@include("../includes/csrf")

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>
	
	@yield("styles")
	@vite(["resources/sass/pages/auth/layout.sass"])
</head>
<body>
	<x-header :auth="$auth" />
	<x-loader/>
	<x-alert/>
	<main class="main">
		@yield("content")
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