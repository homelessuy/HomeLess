<!DOCTYPE html>
<html>
<head>
	<title>HomeLessUY | LogIn</title>
	<link href="css/form/style.css" rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
	<!-- For-Mobile-Apps-and-Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->
	<script src="js/form/jquery.min.js"></script>
	<script src="js/form/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				</script>
</head>
<body>
	<h1>Iniciar Sesión</h1>
	<div class="main-content">
		<div class="form">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Crear Cuenta</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Ingresar</span></li>
				    </ul>		
		            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
				        <div class="facts">
		                    <div class="register">
						        <form action="inc/newUser.php" method="post">
							        <h3>Nombre:</h3>					
							        <input placeholder="Name" name="usuario" type="text" required="">
							        <h3>Mail:</h3>
							        <input placeholder="Email Address" name="mail" type="text" required="">	
							        <h3>Contraseña:</h3>							
							        <input placeholder="Password" name="password" type="password" required="">	
							        <h3>Confirmar Contraseña:</h3>
							        <input placeholder="Confirm Password" name="repassword" type="password" required="">
							        <div class="sign-up">
									    <input type="submit" name="enviar" value="Crear Cuenta"/>
								    </div>
						        </form>
					        </div>
				        </div>
			        </div>	

			        <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
				        <div class="facts">
					        <div class="register">
						         <form action="inc/login.php">
							        <h3>E-mail:</h3>						
							        <input placeholder="Email Address" class="mail" type="text" required="">
							        <h3>Contraseña:</h3>							
							        <input placeholder="Password" class="lock" type="password" required="">										
							        <div class="sign-up">
								        <input type="submit" value="Entrar"/>
							        </div>
						        </form>
						    </div>
				        </div> 
			        </div> 			        					            	      
			 	</div>	
		    </div>
        </div>
        <div class="right">
			<h4>¿Por qué usarla?</h4>
			<ul>
				<li><p>Denuncia los casos de maltrato animal</p></li>
				<li><p>Carga fotos y/o videos</p></li>
				<li><p>Relata lo sucedido</p></li>
			</ul>
			<h5>Iniciar Sesión con:</h5>
			<div class="socialicons">
				<ul>
					<li><a class="facebook" href="#"></a></li>
					<li><a class="twitter" href="#"></a></li>
					<li><a class="google" href="#"></a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<p>&copy 2016 HomeLessUY All rights reserved</p>
	</div>
</body>
</html>