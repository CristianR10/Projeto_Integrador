<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'cadastro';

	//Conexão BD
	$mysqli = new mysqli
		($servidor, $usuario, $senha, $banco);

	if (mysqli_connect_error())
			trigger_error(mysqli_connect_error());	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($sql, $_POST['senha1']))){
		$cliente = mysqli_real_escape_string($sql, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($sql, $_POST['senha1']);
		$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário


		$result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' && senha1 = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: colaborador.php");
			}else{
				header("Location: cliente.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: valida.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: ../index.php");
	}
?>