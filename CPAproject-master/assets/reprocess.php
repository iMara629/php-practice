<?php session_start();
$e = $_POST['username'];
$p = $_POST['password'];
$d = file_get_contents('user.json');
$d = json_decode($d, true);
foreach( $d as $k => $v ){
	if ( $e == $v['username'] && $p == $v['password'] ) {
		$_SESSION["username"] = $v["username"];
		$_SESSION["img"] = $v["img"];
		header('location:../profiles.php');
	} else {
		header('location:../index.php');
	};
};
?>