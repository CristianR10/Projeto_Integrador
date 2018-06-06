<?php 
	session_start();
 ?>
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
<!--pop -->
<style>
#pop{display:none;position:absolute;top:100%;left:100%;margin-left:-300px;margin-top:50px;padding:10px;width:400px;height:300px;}
</style>
</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="index.php"><img src="images/logo.svg" width="200" class="logo" alt=""/></a>
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
						  	<li class="dropdown1"><a href="parts.php">Novidades</a></li>      
						  	<li class="dropdown1"><a href="accessories.html">Salão</a></li>               
						  	<li class="dropdown1"><a href="cadastro.php">Cadastre-se</a></li>
						  	<li class="dropdown1"><a href="login.php">Login</a></li>

						  <a class="shop" href="cart.html"><img src="images/cart.png" alt=""/></a>
					    </ul>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>	 
	 <div class="caption">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li><h1>Produtos para barbas</h1></li>
					<li><h1>Entrega Rápida</h1></li>	
					<li><h1>Barba de Respeito</h1></li>	
				</ul><!-- Letras amarelas-->
					<p>Você <span>sempre</span> com <span>classe,</span> Nós Ajudamos no seu estilo </p>
					<a class="morebtn" href="cremes.html">SHOP</a>
			</div>
		</div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.svg" width="130px" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->
<div id="cate" class="categories">
	 <div class="corpo container">
		 <h3>CATEGORIAS</h3>
		 <div class="categorie-grids">
			 <a href="cremes.html"><div class="col-md-4 cate-grid grid1">
				 <h4>ÓLEOS / CREMES</h4>
				 <p>Produtos para deixar a barba hidratada</p>
				 <a class="store" href="cremes.html">COMPRE AGORA!</a>
			 </div></a>
			 <a href="cremes.html"><div class="col-md-4 cate-grid grid2">
				 <h4>NAVALHAS</h4>
				 <p>Navalhas para cada ocasião</p>
				 <a class="store" href="cremes.html">COMPRE AGORA!</a>
			 </div></a>
			 <a href="cremes.html"><div class="col-md-4 cate-grid grid3">
				 <h4>PENTES</h4>
				 <p>Pentes exclusivos</p>
				 <a class="store" href="cremes.html">COMPRE AGORA!</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!--bikes-->
<!-- PAREI AQUI--> 
<div class="bikes">	
		 <h3>PRODUTOS NOVOS</h3>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
			
				 <li>
				 <img src="images/t2.jpg" alt=""/>
				 <div class="bike-info">
						 <div class="model">
							 <h4>Pente Madeira<span>R$45,00</span></h4>	 
						 </div>
						 <div class="model-info">					     
							 <a href="cremes.html">Compre</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="cremes.html">Mais detalhes</a>
					 </div>
				 </li>
				 <li>
					 <img src="images/t3.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>Kit Master<span>R$250,00</span></h4>							 
						 </div>
						 <div class="model-info">					     
							 <a href="cremes.html">Compre</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="cremes.html">Mais detalhes</a>
					 </div>
				 </li>
				 <li>
				     <img src="images/t4.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>Pente Madeira<span>R$70,00</span></h4>							 
						 </div>
						 <div class="model-info">
						     
							 <a href="cremes.html">Compre</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="cremes.html">Mais detalhes</a>
					 </div>
				 </li>
				 <li>
					 <img src="images/t5.jpg" alt=""/>
					 <div class="bike-info">
						 <div class="model">
							 <h4>Navalha Star line<span>R$350,00</span></h4>							 
						 </div>
						 <div class="model-info">
						     
							 <a href="cremes.html">Compre</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="cremes.html">Mais detalhes</a>
					 </div>
				 </li>
				 <li>
				      <img src="images/t6.jpg" alt=""/>
					  <div class="bike-info">
						 <div class="model">
							 <h4>Creme<span>R$10,00</span></h4>							 
						 </div>
						 <div class="model-info">
						     
							 <a href="cremes.html">Compre</a>
						 </div>						 
						 <div class="clearfix"></div>
					 </div>
					 <div class="viw">
						<a href="cremes.html">Mais detalhes</a>
					 </div>
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	</div>
</div>
<!---->

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



