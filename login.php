<html>
<head>
	<title></title>
</head>
<body>

		<h3>Cadastre-se</h3>
		<p>Cadastre-se, para ganhar pontos e promoções e efetuar compras!</p>
		<!-- Formulario Rafinha -->
		<p>Cadastre-se! <a href="cadastro.php">Entre</a></p>
		<form method="post" action="data/valida.php">
			<input style="background-color:transparent" type="text" class="email"placeholder="USER@DOMAIN.COM" required=""><br>			
			<input style="background-color:transparent" type="password" class="senha1"  placeholder="Criar uma senha" required="">		 
							 
			 <input type="submit" value="Entrar">
			
		</form>
		<?php
		if ($gets[0] == "login")
		{
			$user = isset ($_POST['login']) ? anti_injection ($_POST['login']) : NULL;
			$senha = isset ($_POST['senha']) ? md5 (anti_injection ($_POST['senha'])) : NULL;
			$reconhecer = isset ($_POST['reconhecer']) ? $_POST['reconhecer'] : "n";
			
			$Login = new Login;
			$Login->AutenticarUsuario ($user, $senha, $reconhecer);
		}
		?>

</body>
</html>