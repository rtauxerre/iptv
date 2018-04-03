<?php

function control() {
	echo '<a role="button" href="index.php?start" class="btn btn-success">Start</a> ';
	echo '<a role="button" href="index.php?restart" class="btn btn-warning">Restart</a> ';
	echo '<a role="button" href="index.php?stop" class="btn btn-danger">Stop</a>';
	if ( isset($_GET["start"]) == TRUE ) start();
	elseif ( isset($_GET["restart"]) == TRUE ) restart();
	elseif ( isset($_GET["stop"]) == TRUE ) stop();
}

function status() {
	echo '<pre>';
	system( '/usr/bin/sudo /bin/systemctl --no-pager status iptv', $error );
	echo '</pre>';
	if ( $error == 0 ) echo '<div class="alert alert-success"><strong>Success!</strong> IPTV service is started</div>';
	else echo '<div class="alert alert-danger"><strong>Failed!</strong> IPTV service is not started</div>';
	echo '<pre>';
	system( '/usr/bin/sudo /bin/journalctl --no-pager $(which dvblast)' );
	echo '</pre>';
}

function start() {
	system( 'systemctl --no-pager start iptv' );
}

function stop() {
	system( 'systemctl --no-pager stop iptv' );
}

function restart() {
/*	system( 'systemctl --no-pager restart iptv' ); */
	echo restart;
	$output = shell_exec("/usr/bin/sudo /bin/systemctl --no-pager restart iptv");
	echo "<pre>$output</pre>";
}

?>
