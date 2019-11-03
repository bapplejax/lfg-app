<?php
  $thisPage="Premium";
  session_start();
?>

<html>

  <?php require_once('phpincludes/head.php'); ?>

  <body id="<?php echo $thisPage; ?>">a
    <div class="lfg-header">
      <?php require_once('phpincludes/header.php'); ?>
    </div>

    <div class="lfg-banner__container">
      <?php require_once('phpincludes/banner-premium.php'); ?>
    </div>

  <?php
  if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $message) {
      echo "<div class='message {$_SESSION['status']}'>{$message}</div>";
    }
  }
  ?>

    <div class="lfg-main-content__container lfg-content--contact">
      <div class="lfg-main-content__inner">
        <h2>Why Go Premium?</h2>
        <hr />
        <ul>
          <li>You'll be cool</li>
          <li>Rub it in your dumb friends' faces</li>
          <li>Gain access to exciting features</li>
        </ul>
      </div>
    </div>

    <div class="lfg-footer">
      <?php require_once('phpincludes/footer.php'); ?>
    </div>
  </body>
</html>
