<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
</head>
<body>
	<h1 id="mainTitle">Hello Company this is your Admin Page</h1>
	<?php

  if ( $time >= 4 && $time <= 11 ) {
      echo "<h2 class='welcomeUser'>Good Morning, Hello User {$_SESSION['user_name']}</h2>";

  } else if ( $time >= 12 && $time <= 19 ) {

      echo "<h2 class='welcomeUser'>Good Afternoon, Hello User {$_SESSION['user_name']}</h2>";

  } else if ( $time >= 20 || $time <= 3 ) {

      echo "<h2 class='welcomeUser'>Good Evening, Hello User {$_SESSION['user_name']}</h2>";
  }

	 ?>
</body>
</html>
