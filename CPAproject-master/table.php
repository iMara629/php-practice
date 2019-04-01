<html>

<head>
    <title>hi</title>
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('partials/nav.php') ?>

    <h2>Table</h2>
    <h2>hi</h2>
    <table>
        <table border=1 cellpadding=10>
            <tr>
                <th>Zip</th>
                <th>Full Name</th>
                <th>Image</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Password Repeat</th>
                <th>Textbox</th>
            </tr>

            <?php
	
	$d = file_get_contents('extras/user.json');
	$d = json_decode($d, true);

	foreach( $d as $k => $v ){
		echo '
			<tr>
				<td>'.$v['zip'].'</td>
				<td>'.$v['fn'].'</td>
                <td>'.$v['img'].'</td>
				<td>'.$v['em'].'</td>
				<td>'.$v['un'].'</td>
				<td>'.$v['pw'].'</td>
				<td>'.$v['pwr'].'</td>
				<td>'.$v['myTextBox'].'</td>
			</tr>
			';
	};
		?>
        </table>
    </table>
        <?php require_once('partials/footer.php') ?>
</body>
</html>
