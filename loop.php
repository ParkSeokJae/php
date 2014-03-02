<?php
$i = 0;

#while
echo '-- while start! --'.'<br />';
while ($i <= 10) {
	echo "while_".$i."<br />";
	$i += 1;
}

#for
echo '-- for start! --'.'<br />';
for ($i=0; $i < 10; $i++) { 
	echo "for_".$i."<br />";
}

#for .. break
echo '-- for..break start! --'.'<br />';
for ($i=0; $i < 10; $i++) { 
	if ($i === 5) {
		break;
	}
	echo "for_".$i."<br />";
}

#for .. continue
echo '-- for..continue start! --'.'<br />';
for ($i=0; $i < 10; $i++) { 
	if ($i === 5) {
		continue;
	}
	echo "for_".$i."<br />";
}

#for .. for
echo '-- for..for start! --'.'<br />';
for ($i=0; $i < 10; $i++) { 
	for ($j=0; $j < 10; $j++) { 
		echo "for i:".$i.", for j:".$j."<br />";
	}	
}

?>