<?php
# before php 5.4 : $member = array('mem01','mem02','mem03');
$member = ['mem01','mem02','mem03'];

echo $member[0].'<br />';
echo $member[1].'<br />';
echo $member[2].'<br />';

#array return function
function get_members(){
	return ['mem01','mem02','mem03'];
}

$tmp = get_members();
echo $tmp[1];
echo get_members()[1]; # same. before php 5.4
echo '<br />';

#array .. for
$members = get_members();
for ($i=0; $i < count($members); $i++) { 
	echo ucfirst($members[$i]).'<br />';
}
echo '<br />';

#array .. count
$l = [1,2,3,4,5];
echo count($l);
echo '<br />';

#array .. push
$arr = ['a','b','c','d','e'];
array_push($arr, 'f');
var_dump($arr);
echo '<br />';

#array .. pop
$arr_pop = ['a','b','c','d','e'];
array_pop($arr_pop);
var_dump($arr_pop);
echo '<br />';

#array .. merge
$arr_merge = ['a','b','c','d','e'];
array_push($arr_merge, ['f','g']);
var_dump($arr_merge);
echo '<br />';

#array .. unshift
$arr_unshift = ['a','b','c','d','e'];
array_unshift($arr_unshift, 'z');
var_dump($arr_unshift);
echo '<br />';

#array .. shift
$arr_shift = ['a','b','c','d','e'];
array_shift($arr_shift);
var_dump($arr_shift);
echo '<br />';

#array .. splice
$arr_splice = ['a','b','c','d','e'];
array_splice($arr_splice, 2, 0, 'B');
var_dump($arr_splice);
echo '<br />';

#array .. sort
$arr_sort = ['c','d','a','b','e'];
sort($arr_sort);
var_dump($arr_sort);
echo '<br />';

#array .. rsort
$arr_rsort = ['c','d','a','b','e'];
rsort($arr_rsort);
var_dump($arr_rsort);
echo '<br />';

/*
reference :
http://www.php.net/manual/en/ref.array.php
*/

?>