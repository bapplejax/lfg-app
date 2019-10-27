<?php
$thisPage="Create";
session_start();
?>
<html>

<?php require_once('phpincludes/head.php'); ?>

<body id="<?php echo $thisPage; ?>">
<div class="lfg-header">
  <?php require_once('phpincludes/header.php'); ?>
</div>

<div class="lfg-banner__container">
  <?php require_once('phpincludes/banner-contact.php'); ?>
</div>

<div class="lfg-main-content__container lfg-content--contact">
  <div class="lfg-main-content__inner">
    <form class="create-form" action="/phpincludes/create_user.php" method="POST">
      <div>Login</div>
      <label for="username">Username</label>
      <input type="text" name="username" required />
      <label for="password">Password</label>
      <input type="password" name="password" required />
      <label>Region</label>
      <div class="create-form__region">
        <input type="radio" name="region" value="NA"><p>North America</p>
        <input type="radio" name="region" value="EU"><p>Europe</p>
        <input type="radio" name="region" value="Other"><p>Other</p>
      </div>
      <input type="submit">
    </form>
  </div>
</div>

<div class="lfg-footer">
  <?php require_once('phpincludes/footer.php'); ?>
</div>
</body>
</html>
