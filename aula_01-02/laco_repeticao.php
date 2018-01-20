<?php

$i = 0;
while ($i < 10) {
	echo "O valor e: $i ";
	echo "<hr>";
	$i++;
}
echo "<br/>"; 
echo "<hr><hr><hr>";
$i = 0;
do{ echo "O valor e: $i ";
	echo "<hr>";
	$i++;
}while($i < 10);

echo "<br/>";
echo "<hr><hr><hr>";
for($x = 0; $x < 10; $x++){
	echo "O valor e: $x ";
	echo "<hr>";
}