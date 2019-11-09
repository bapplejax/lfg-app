<?php
$thisPage="Profile";
session_start();
?>

<html>

  <?php require_once('phpincludes/head.php'); ?>

  <body id="<?php echo $thisPage; ?>">
    <div class="lfg-header">
      <?php require_once('phpincludes/header.php'); ?>
    </div>

    <div class="lfg-banner__container">

      <?php
      if (isset($_SESSION['messages'])) {
        foreach ($_SESSION['messages'] as $message) {
          echo "<div class='message {$_SESSION['status']}'>{$message}</div>";
        }
      }
      ?>

      <?php
      if (!isset($_SESSION['logged_in'])) {
        require_once('phpincludes/banner-login.php');
      } else {
        require_once('phpincludes/banner-profile.php');
      }
      ?>

    </div>

    <div class="lfg-main-content__container">
      <div class="lfg-main-content__inner three-quarter-container">
        <div class="lfg-cards__container">
          <?php
          if (isset($_SESSION['logged_in'])) {
            require_once('phpincludes/lfg-cards.php');
          }
          ?>
        </div>

        <div class="lfg-sidebar">
          <h3>SIDEBAR CONTENT HERE</h3>
        </div>
      </div>
    </div>

    <?php require_once('phpincludes/footer.php'); ?>
  </body>
</html>
