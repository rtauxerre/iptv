<?php

function control() {
	echo '<a role="button" href="index.php?action=start" class="btn btn-success">Start</a> ';
	echo '<a role="button" href="index.php?action=restart" class="btn btn-warning">Restart</a> ';
	echo '<a role="button" href="index.php?action=stop" class="btn btn-danger">Stop</a>';
}

function status() {
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
	echo '<pre>';
	system( 'journalctl -xb | grep dvblast' );
	echo '</pre>';
}

function start() {
	system( 'systemctl start iptv' );
}

function stop() {
	system( 'systemctl stop iptv' );
}

function restart() {
	system( 'systemctl restart iptv' );
}

?>
