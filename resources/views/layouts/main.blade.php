<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	@include("../includes/csrf")

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield("title")</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	@vite(["resources/sass/_global.sass"])
	@yield("styles")

</head>
<body>
	<main class="main">
		<div class="container">
			@yield("content")
		</div>
	</main>
	@yield("scripts")
</body>
</html>
