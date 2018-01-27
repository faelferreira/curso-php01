<html>
<head>
	<title>formulario</title>
</head>

<body>
	<h2>Meu formulario</h2>
	<pre>
	<form action="#" method="post">
		<fieldset>
			Nome:	<input type ="text" name="nome" placeholder="digite o nome" /><br/>
			Email:	<input type="text" name="email" required/><br/>
			senha:	<input typr="password" name="senha" required/><br/>
			<input type="submit"/>
		</fieldset>
	</form>form>

	<?php
		/*$nome = $_POST[nome];
		$email=$_POST[email];
		$senha = $_POST[senha];
	*/
		var_dump($_POST);
	?>
	</pre>
</body>
</html>