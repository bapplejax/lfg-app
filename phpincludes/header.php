<?php
session_start();
?>
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
    <form class="logout-form" action="../phpincludes/logout_handler.php" method="POST"><button type="submit">Logout</button></form>
    <button class="lfg-header__login"><img src="/img/icons/man-user.png" alt="profile icon" />Log In/Register</button>
    <?php
      if (isset($_SESSION['logged_in'])) {
        echo '<h1>Logged in</h1>';
      } else {
        echo '<h1>Logged Out</h1>';
      }
    ?>
	</div>
</div>

<div class="lfg-header__bottom">
	<?php include_once('navigation.php'); ?>
</div>

<?php
if (isset($_SESSION['message'])) {
  echo "<div class='message'>{$_SESSION['message']}</div>";
}
?>

<div id="loginModal" class="modal">
  <div class="modal__wrapper">
    <!--  close button -->
    <span class="close">&times;</span>

    <form class="login-form" action="../phpincludes/login_handler.php" method="POST">
      <div>Login</div>
      <label for="username">Username</label>
      <input type="text" name="username" required />
      <label for="password">Password</label>
      <input type="password" name="password" required />
      <input type="submit">
    </form>
  </div>
</div>
