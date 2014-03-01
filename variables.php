<html>
 <body>
	<?php
	/* normal variable */
	$a=1;
	echo $a+1; #2
	echo "<br />";
	$a=2;
	print $a+1; #3
	echo "<br />";
	$first = "coding";
	echo $first." is easy.";

	echo "<br />";
	/* const variable */
	define('TITLE', 'PHP Tutorial');
	echo TITLE;

	/* error occur 
	define('TITLE', 'JAVA Tutorial');
	echo TITLE;
	*/

	echo "<br />";
	/* gettype, settype */
	$a = 100;
	echo gettype($a);
	settype($a, 'double');
	echo ' converted to '.gettype($a);
	
	echo "<br />";
	/* variable variables */
	$title = 'subject';
	$$title = 'PHP Tutorial';
	echo $subject;
	?>
 </body>
</html>