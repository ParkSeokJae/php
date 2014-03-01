<?php
/* http://localhost/firstapp/get.php?id=parksj*/
echo $_GET['id'];
echo '<br />';
/* http://localhost/firstapp/get.php?id=parksj&password=1111 */
echo $_GET['id'].','.$_GET['password'];
?>