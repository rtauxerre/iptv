<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TV Streaming</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">

<h1>TV Streaming</h1>

<h2>Service control</h2>

<button class="btn btn-success" type="submit">Start</button>
<button class="btn btn-danger" type="submit">Stop</button>
<button class="btn btn-warning" type="submit">Restart</button>

<h2>Service status</h2>

<?php
echo '<pre>';
system( 'systemctl --no-pager status iptv', $error );
echo '</pre>';
if ( $error == 0 ) {
echo '<div class="alert alert-success">';
echo '<strong>Success!</strong> IPTV service is started.';
echo '</div>';
}
else {
echo '<div class="alert alert-danger">';
echo '<strong>Failed!</strong> IPTV service is not started';
echo '</div>';
}
?>

</div>

</body>

</html>
