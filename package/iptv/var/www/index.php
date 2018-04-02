<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>IPTV Server Admin</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<h1>Administration du service de streaming TV</h1>
<h2>Service status</h2>
<?php
echo "<pre>".exec('systemctl status iptv 2>&1')."</pre>";
?>
<div class="footer">
<p>IUT RT Auxerre</p>
</div><!-- footer -->
</div> <!-- container -->
</body>

</html>
