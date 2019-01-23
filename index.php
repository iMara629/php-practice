<!doctype html>
<html>

<head>
	<title>php1</title>
</head>

<body>
	<?php require_once('nav.php'); ?>



	<?php
			$name = "bob";
		
			$person = [
				"fn" => "Joe",
				"ln" => "Garcia",
				"city" => "New York",
				"borough" => "Brooklyn",
				"skills" => ["HTML", "CSS", "JS"],
				"pets" => ["kitty", "bird", "pigeon", "panda", "gorillaman"],
				"eyecolor" => "Brown",
				"occupation" => "Web Developer"
			];
		?>
	<h1> hello
		<?php echo $name; ?>
	</h1>
	<p>Let's talk about
		<?php echo $person['fn'];?>.</p>
	<p>Full Name:
		<?php echo $person['fn'].' '.$person['ln'];?>
	</p>
	<p>City:
		<?php echo $person['city'];?>
	</p>
	<p>Borough:
		<?php echo $person['borough'];?>
	</p>
	<p>Skills: </p>
	<ul>
		<?php
				foreach($person["skills"] as $i => $v) {
					echo '<li>'.$v.'</li>';
				}
			?>

	</ul>
	<p>Pets: </p>
	<ul>
		<?php
				foreach($person["pets"] as $i => $v) {
					echo '<li>' .$v.'</li>';
				}
			?>
	</ul>
	<p>Eye Color:
		<?php echo $person['eyecolor'];?>
	</p>
	<p>Occupation:
		<?php echo $person['occupation'];?>
	</p>
</body>

</html>
