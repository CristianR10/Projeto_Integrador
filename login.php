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
		<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>

</body>
</html>