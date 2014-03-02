<?php
# if-1
/*
if (false) {
	echo "result : 1";
} else {
	echo "result : 2";
}
*/

#if-2
if (!true and !true){    
	echo 1; #false
}
echo "<br />";

if (!true and !false){    
	echo 2; #false
}
echo "<br />";

if (!false and !true){    
	echo 3; #false
}
echo "<br />";

if (!false and !false){
    echo 4; #true!
}
echo "<br />";

?>