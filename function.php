<?php

#function1
function numbering(){
	$i = 0;
	while ($i <= 10) {
		echo $i;
		$i += 1;
	}
}

numbering();
echo '<br />';
numbering();
echo '<br />';
numbering();
echo '<br />';

#function2
function get_member1(){
	return 'parkseokje';
}
function get_member2(){
	return ' is handsome.';
}
function get_argument($arg=100){
	return $arg;
}
function get_arguments($arg1, $arg2){
	return $arg1 + $arg2;
}

echo get_member1();
echo get_member2();

echo '<br />';
print get_argument(1);
print get_argument(2);
echo '<br />';
print get_argument();

echo '<br />';
print get_arguments(10, 20);

?>