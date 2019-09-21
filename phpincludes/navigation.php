<?php ?>
<nav>
	<ul class="lfg-nav">
		<li<?php if ($thisPage=="Home") echo " class=\"active\""; ?>><a href="/index.php">Home</a></li>
		<li<?php if ($thisPage=="About") echo " class=\"active\""; ?>><a href="/about.php">About</a></li>
		<li<?php if ($thisPage=="Games") echo " class=\"active\""; ?>><a href="/games.php">Games</a></li>
		<li<?php if ($thisPage=="Go Premium") echo " class=\"active\""; ?>><a href="/premium.php">Go Premium</a></li>
		<li<?php if ($thisPage=="Contact") echo " class=\"active\""; ?>><a href="/contact.php">Contact</a></li>
	</ul>
</nav>
