<?php
echo "<br>";
	$senha='123';
	print_r(md5($senha));
	echo "<br>";
	print_r(md5($senha));
	echo "<br>";
	print_r(md5($senha));
	echo "<br>";
	echo "<hr>";

	print_r(sha1($senha));
	echo "<br>";
	print_r(sha1($senha));
	echo "<br>";
	print_r(sha1($senha));
	echo "<br>";
	echo "<hr>";

	print_r(hash($senha));
	echo "<br>";
	print_r(hash($senha));
	echo "<br>";
	print_r(hash($senha));
	echo "<br>";
	echo "<hr>";

	//cifra de cesar