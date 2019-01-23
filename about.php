<!doctype html>
<html>

<head>
	<title>php1</title>
</head>

<body>
	<?php require_once('nav.php'); ?>
	<h1>About</h1>
	<table border=1 cell-padding=10>
		<tr>
			<th>Full Name</th>
			<th>Email</th>
		</tr>

		<?php
		$d = file_get_contents('data.json');
		$d = json_decode($d, true);
		
		foreach( $d as $k => $v ){
			echo
				'<tr>
					<td>'.$v['fn'].' '.$v['ln'].'</td>
					<td>'.$v['em'].'</td>
				</tr>
			';
		};
		
		
		?>



	</table>
</body>

</html>
