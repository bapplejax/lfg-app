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
  <?php require_once('phpincludes/banner-create.php'); ?>
</div>

<div class="lfg-main-content__container lfg-content--create-user">
  <div class="lfg-main-content__inner">
    <form class="create-form" action="/phpincludes/create_user.php" method="POST">
      <h2>Create your profile!</h2>

      <div class="create-form__line">
        <label for="username">Username*</label>
        <input type="text" name="username" />
      </div>

      <div class="create-form__line">
        <label for="password">Password*</label>
        <input type="password" name="password" />
      </div>

      <div class="create-form__line">
        <label>Email Address*</label>
        <input type="email" name="email" />
      </div>

      <div class="create-form__line create-form__line--radio">
        <label>Region</label>
        <div class="create-form__region">
          <div>
            <input type="radio" name="region" id="NA" value="NA" />
            <label for="NA">North America</label>
          </div>

          <div>
            <input type="radio" name="region" id="EU" value="EU">
            <label for="EU">Europe</label>
          </div>

          <div>
            <input type="radio" name="region" id="Other" value="Other">
            <label for="Other">Other</label>
          </div>
        </div>
      </div>

      <div class="create-form__line">
        <input class="button button--primary" type="submit">
      </div>
    </form>

    <?php
    if (isset($_SESSION['messages'])) {
      foreach ($_SESSION['messages'] as $message) {
        echo "<div class='message {$_SESSION['status']}'>{$message}</div>";
      }
    }
    ?>

  </div>
</div>

<div class="lfg-footer">
  <?php require_once('phpincludes/footer.php'); ?>
</div>
</body>
</html>
