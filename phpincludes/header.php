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
    <?php
      if (isset($_SESSION['logged_in'])) {
        echo '<form class="logout-form" action="../phpincludes/logout_handler.php" method="POST"><button type="submit">Logout</button></form>';
      } else {
        echo '<button class="lfg-header__login"><img src="/img/icons/man-user.png" alt="profile icon" />Log In/Register</button>';
      }
    ?>
	</div>
</div>

<div class="lfg-header__bottom">
	<?php include_once('navigation.php'); ?>
</div>

<?php
if (isset($_SESSION['messages']) && $_SESSION['messages'] != '') {
  echo "<div class='message " . $_SESSION['status'] . "'>{$_SESSION['messages']}</div>";
  unset($_SESSION['messages']);
}
?>

<?php
  if (!isset($_SESSION['logged_in'])) {
    echo '
      <div id="loginModal" class="modal">
        <div class="modal__wrapper">
          <!--  close button -->
          <span class="close">&times;</span>
          
            <form class="login-form" action="../phpincludes/login_handler.php" method="POST">
              <h3>Login</h3>
              <label for="username">Username</label>
              <input type="text" name="username" required />
              <label for="password">Password</label>
              <input type="password" name="password" required />
              <input class="button button--primary" type="submit">
            </form>
            
            <a href="/create-user.php">New member? Create your profile!</a>
              
        </div>
      </div>
    ';
  }
?>

