<?php
<nav>
		<ul>
			<li<?php if ($thisPage=="Home") echo " class=\"active\""; ?>><a href="#">Home</a></li>
			<li<?php if ($thisPage=="About") echo " class=\"active\""; ?>><a href="#">About</a></li>
			<li<?php if ($thisPage=="Games") echo " class=\"active\""; ?>><a href="#">Games</a></li>
			<li<?php if ($thisPage=="Go Premium") echo " class=\"active\""; ?>><a href="#">Go Premium</a></li>
			<li<?php if ($thisPage=="Contact") echo " class=\"active\""; ?>><a href="#">Contact</a></li>
		</ul>
	</nav>
?>
