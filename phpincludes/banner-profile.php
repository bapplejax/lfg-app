<?php
session_start();
?>

<img class="lfg-banner__image" src="https://www.fillmurray.com/2000/700" alt="Banner Image" />
<div class="lfg-banner__text-area">
  <h1 class="lfg-banner__title">Welcome back, <?php echo $_SESSION['username']; ?></h1>
  <p class="lfg-banner__subtext">here is your profile</p>
</div>
