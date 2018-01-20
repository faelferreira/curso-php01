<?php
	$temperaturas =[ 
	'2008'=>[
		'janeiro'=> 32,
		'fevereiro'=> 31,],

	´ 2009'=>['janeiro'=> 32,
		'fevereiro'=> 31,],

	'2010'=>['janeiro'=> 32,
		'fevereiro'=> 31,],

		];

		//print_r($temperaturas);

		foreach ( $temperaturas as $ano => meses){
			echo "<strong> $ano</strong>:<br/>";
			foreach($meses as $mes => $temp){
				echo "$mes: $temp<br/>";
			}
		}
?>