<?php $thisPage="Home"; ?>

<head>
	<title>Looking for Group<?php if ($thisPage!="") echo " | $thisPage"; ?></title>
	<meta name="title" content="Looking for Group<?php if ($thisPage!="") echo " | $thisPage"; ?>" />
	<meta name="keywords" content="<?php if ($thisPage!="")echo "$thisPage, "; ?> Looking for Group" />
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
	<h1>How about now</h1>
	<?php
		define('__ROOT__', dirname(dirname(__FILE__)));
		require_once(__ROOT__.'/phpincludes/navigation.php');
	?>	
  <h1>Hello Woild</h1>
</body>
