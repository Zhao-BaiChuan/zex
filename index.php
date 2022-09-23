<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ACS</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class='bx'>
    <div class='r'>[ <a href="<? echo $loginlogout; ?>"><?php echo $whoami; ?></a> ]</div]>
    &nbsp;</div>
</div>
  <h1>ZEX</h1>
  </form>
  </body>
</html>
