<?php
#key, value
$info = array('name'=>'sjpark', 'tall'=>183, 'weight'=>85, 'email'=>'molla4455@naver.com');
echo $info['weight'];
echo '<br />';

#key, value - 2
$info2 = [];
$info2['name'] = 'sjpark';
$info2['tall'] = 183;
$info2['weight'] = 85;
$info2['email'] = 'molla4455@naver.com';
var_dump($info2);

#foreach as
echo '<br /><br />';
foreach ($info as $key => $value) {
	echo "Key: {$key} value:{$value}<br />";
}

/*
reference :
http://www.php.net/manual/en/language.types.array.php
*/

?>