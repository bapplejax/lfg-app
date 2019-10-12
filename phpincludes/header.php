<?php ?>
<div class="lfg-header__top">
    <div class="lfg-header__left">
    <img class="lfg-header__logo" src="https://www.fillmurray.com/200/75" />
    <p class="lfg-header__title">LOOKING<br/><span>for group</span></p>
  </div>

	<div class="lfg-header__search-container">
		<div class="lfg-header__search-icon">
			<i class="icon icon--search"></i>
		</div>
		<input class="lfg-header__search-field" type="text" placeholder="Search" >
	</div>

	<div class="lfg-header__right">
		<a href="#"><img class="lfg-header__twitter" src="/img/icons/twitter.png" alt="twitter icon" /></a>
		<!-- @TODO have an if statement for login status to change out icons/words -->
		<a class="lfg-header__login" href="#"><img src="/img/icons/man-user.png" alt="profile icon" />Log In/Register</a>
	</div>
</div>

<div class="lfg-header__bottom">
	<?php include_once('navigation.php'); ?>
</div>

<div id="loginModal" class="modal">
  <div class="modal__wrapper">
    <!--  close button -->
    <span class="close">&times;</span>

    <form class="login-form" action="../phpincludes/create_user.php" method="POST">
      <div>Create your first user</div>
      <label for="username">Username</label>
      <input type="text" name="username" required />
      <label for="password">Password</label>
      <input type="password" name="password" required />
      <input type="submit">
    </form>
  </div>
</div>
