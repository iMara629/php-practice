<!doctype html>
<html>

<head>
	<title>php1</title>
</head>

<body>
	<?php require_once('nav.php'); ?>
	<h1>Contact</h1>

	<form method="get" action="process.php">
		<label> First Name: <br>
			<input type="text" name="fn">

		</label>
		<br><label> Middle Initial: <br>
			<input type="text" name="mn">

		</label>
		<br><label> Last Name: <br>
			<input type="text" name="ln">

		</label>
		<br><label> Email: <br>
			<input type="text" name="em">

		</label>
		<br>
		<input type="submit" value="send naow">
	</form>

</body>

</html>
