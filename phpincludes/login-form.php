<?php
session_start();
?>

<form class="login-form" action="../phpincludes/login_handler.php" method="POST">
  <div>Login</div>
  <label for="username">Username</label>
  <input type="text" name="username" required />
  <label for="password">Password</label>
  <input type="password" name="password" required />
  <input type="submit">
</form>
