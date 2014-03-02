<?php
if ($_GET['id'] === 'parksj') {
	if ($_GET['password'] === '111111') {
		echo 'right';
	} else {
		echo 'password wrong'	;
	}
} else {
	echo 'id wrong';
}
?>