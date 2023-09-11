<?php
$auth = true;
?>
<header class="header <?php if ($auth) echo "home"; else echo "auth" ?>">
	<div class="container">
		@if (!$auth)
			<img src="/images/logo-auth.svg" alt="Университет Синергия">
		@else
			<img src="/images/logo-home.svg" alt="Университет Синергия">
			<button class="btn__primary outline small">Выйти</button>
		@endif
	</div>
</header>
