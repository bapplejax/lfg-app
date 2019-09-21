<?php ?>
<div class="lfg-header__top">
	<img class="lfg-header__logo" src="https://www.fillmurray.com/200/75" />

	<p class="lfg-header__title">LOOKING<br/><span>for group</span></p>

	<div class="lfg-header__search-container">
		<div class="lfg-header__search-icon">
			<i class="icon icon--search"></i>
		</div>
		<input class="lfg-header__search-field" type="text" placeholder="Search" >
	</div>

	<div class="lfg-header__right">
		<i class="icon icon--twitter"></i>
		<!-- @TODO have an if statement for login status to change out icons/words -->
		<a class="lfg-header__login" href="#"><i class="icon icon--user"></i>Log In/Register</a>
	</div>
</div>

<div class="lfg-header__bottom">
	<?php include_once('navigation.php'); ?>
</div>
