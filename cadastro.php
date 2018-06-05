<!DOCTYPE html>
<html>
<head>
<title>Pro Barber | Home </title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design, barbearia, barba" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->
<!-- start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!-- start-smoth-scrolling-->


</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.html"><img src="images/logo.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="cremes.html">Óleos / Cremes</a>
							  <ul class="dropdown2">
									<li><a href="oleo.html">Óleo</a></li>
									<li><a href="cremes.html">Creme</a></li>
									<li><a href="acessorios.html">Acessório</a></li>												
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="parts.php">Novidades</a>
							 
						 </li>      
						 <li class="dropdown1"><a href="accessories.html">Salão</a>
							 
						 </li>               
						 <li class="dropdown1"><a href="cadastro.php">Cadastre-se</a>							
						 </li>
						  <a class="shop" href="cart.html"><img src="images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="teste">
	<div class="container">
		<h3>Cadastre-se</h3>
		<p>Cadastre-se, para ganhar pontos e promoções e efetuar compras!</p>
		<!-- Formulario Rafinha -->
		<p>Já é um membro? <a href="index.php">Entre</a></p>
		<form method="post" action="data/gravar.php">
			<input style="background-color:transparent" class="user" type="text" name="nome"placeholder="Nome Completo" required=""><br>
			<input style="background-color:transparent" class="user" type="text" name="email"placeholder="USER@DOMAIN.COM" required=""><br>
			<input style="background-color:transparent" class="user" type="text" name="end"placeholder="Endereço" required=""><br>
			<input style="background-color:transparent" type="text" name="numero"placeholder="Numero" required="">			 
			<input style="background-color:transparent" type="text" name="comple"placeholder="Complemento" required="">	
			<input style="background-color:transparent" type="text" name="tel"placeholder="1100000000" required="">	
			<input style="background-color:transparent" type="text" name="cel"placeholder="11900000000" required="">	
			<input style="background-color:transparent" name="senha1" type="password" placeholder="Criar uma senha" required="">		 
			<input style="background-color:transparent" name="senha2" type="password" placeholder="Confirmar Senha" required="">				 
			 <input type="submit" value="Criar a sua conta">
			 <?php 
				if ($_POST) {
					$senha1 = $_POST['senha1'];
					$criptografada = md5($senha);
					$senha2 = $_POST['senha2'];
				if ($senha1 == "") {
						$mensagem = "<span class='aviso'><b>AVISO</b>: Senha não foi alterada!</span>";
					} elseif ($senha1 ==$senha2) {
						$mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais</span>";
					} else {
						$mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem</span>";
					}
					echo "<p id='mensagem'>".$mensagem."</p>";
		}
	 ?>
		</form>
	</div>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.php"><img src="images/logo.svg" width="100px" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="cremes.html">Óleos / Cremes</a></li>
				 <li><a href="parts.php">Novidades</a></li>
				 <li><a href="accessories.html">Salão</a></li>
				 <li><a href="cadastro.php">Cadastre-Se!</a></li>
			 </ul>
		</div>		
		<div class="clearfix"></div>
		<center>
		<p>Rua Força Publica - Centro - Guarulhos - SP</p>
		<p>(11) 95107-2298 developer@gmail.com</p>
		</center>
	 </div>
</div>
<!---->

</body>
</html>

