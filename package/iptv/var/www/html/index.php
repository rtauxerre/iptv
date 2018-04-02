<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TV Streaming</title>
	<link href="bootstrap.min.css" rel="stylesheet">
</head>

<?php require_once("functions.php"); ?>

<body>
	<div class="container">

		<h1>TV Streaming</h1>

		<h2>Service control</h2>
		<div class="container">
			<?php control(); ?>
		</div>

		<h2>Service status</h2>
		<div class="container">
			<?php status(); ?>
		</div>

	</div>
</body>

</html>
