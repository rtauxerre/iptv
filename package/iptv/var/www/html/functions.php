<?php

function control() {
	echo '<a role="button" href="index.php?start" class="btn btn-success">Start</a> ';
	echo '<a role="button" href="index.php?restart" class="btn btn-warning">Restart</a> ';
	echo '<a role="button" href="index.php?stop" class="btn btn-danger">Stop</a> ';
	echo '<a role="button" href="index.php?shutdown" class="btn btn-secondary">Shutdown</a>';
	if ( isset($_GET["start"]) == TRUE ) system( 'sudo systemctl start iptv' );
	elseif ( isset($_GET["restart"]) == TRUE ) system( 'sudo systemctl restart iptv' );
	elseif ( isset($_GET["stop"]) == TRUE ) system( 'sudo systemctl stop iptv' );
	elseif ( isset($_GET["shutdown"]) == TRUE ) system( 'sudo systemctl poweroff' );
}

function status() {
	echo '<pre>';
	system( 'systemctl status iptv', $error );
	echo '</pre>';
	if ( $error == 0 ) echo '<div class="alert alert-success"><strong>Success!</strong> IPTV service is started</div>';
	else echo '<div class="alert alert-danger"><strong>Failed!</strong> IPTV service is not started</div>';
	echo '<pre>';
	system( 'sudo journalctl -xb | grep \'dvblast\[\'' );
	echo '</pre>';
}

?>
