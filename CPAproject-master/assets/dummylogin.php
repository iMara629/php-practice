<html>
<head>
<title>hi</title>
        <link href="assets/style.css" rel="stylesheet">
</head>

<body>
        <?php require_once('partials/nav.php') ?>
    <h2>Login</h2>
        <div class="container">
		<form action="extras/reprocess.php" method="post">
			<label>Username <br>
				<input type="username" name="un">
			</label>
			<br>
			<label>Password <br>
				<input type="password" name="pw">
			</label>
			<br>
			<input type="submit" value="Login">
		</form>
	</div>
        <?php require_once('partials/footer.php') ?>
</body>
</html>