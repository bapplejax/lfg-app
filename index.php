<?php $thisPage="Home"; ?>
<html>

	<?php require_once('phpincludes/head.php'); ?>

	<body id="<?php echo $thisPage; ?>">
		<div class="lfg-header">
			<?php require_once('phpincludes/header.php'); ?>
		</div>

		<div class="lfg-banner__container">
			<?php require_once('phpincludes/banner.php'); ?>
	  </div>

    <div class="lfg-main-content__container">
      <div class="lfg-main-content__inner three-quarter-container">
        <div class="lfg-cards__container">

          <form action="phpincludes/create_user.php" method="post">
            <div>Create user</div>
            <label for="username">Username</label>
            <input type="text" name="username" required />
            <label for="password">Password</label>
            <input type="password" name="password" required />
            <input type="submit">
          </form>
          <?php
          require_once 'phpclasses/Dao.php';
          $dao = new Dao();
          $create_user = $dao->createUser();
          echo "<div>";
          foreach($comments as $comment) {
            echo "<tr><td>{$comment['comment']}</td>" .
              "<td>{$comment['date_entered']}" .
              "<td><a href='delete_handler.php?comment_id={$comment['comment_id']}'>X</a></td></tr></tr>";
          }
          echo "</table>";
          ?>


          <?php require_once('phpincludes/lfg-cards.php'); ?>
        </div>

        <div class="lfg-sidebar">
          <h3>SIDEBAR CONTENT HERE</h3>
        </div>
      </div>
    </div>

    <div class="lfg-footer">
      <?php require_once('phpincludes/footer.php'); ?>
    </div>
	</body>
</html>
