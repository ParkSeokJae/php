<?php
# if-1
/*
if (false) {
	echo "result : 1";
} else {
	echo "result : 2";
}
*/

#if-boolean1
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

#if-boolean2
if (1 and 1) {
    echo 1;
}
echo "<br />";

if (1 and 0) {
    echo 2;
}
echo "<br />";

if (0 and 1) {
    echo 3;
}
echo "<br />";

if (0 and 0) {
    echo 4;
}
echo "<br />";

/*
reference :
- PHP type comparison tables
  1) url : http://php.net/manual/en/types.comparisons.php
  2) method : gettype(), emptyp(), is_null(), isset(), boolean:if($x)
*/
?>