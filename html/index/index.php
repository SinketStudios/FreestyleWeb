
<?php include(HTML_DIR . 'overall/header.php'); ?>
	<body>
	<?php include(HTML_DIR . 'overall/topnav.php'); ?>



	<div class="banner">
  		<img class="banner-image" src="views/app/images/banner.jpg">
	</div>
	
	<div class="heading">¿Qué puedes hacer?</div>
		<hr class="headingHr">
		<div align="center" class="services">
			<div class="service1">
				<h1 class="servH">Entrenar</h1>
					<a href="http://localhost/FreestyleWeb/?view=entrenar"><img class="image" src="views/app/images/entrena.png"></a>
						<p>Entrena en solitario para alcanzar más nivel y poder estar a la altura de otros competidores, contra más entrenes, más puntos consigues y podrás subir de nivel obteniendo recompensas.</p>
			</div>

			<div class="service1">
				<h1 class="servH">Batalla</h1>
					<a href=""><img class="image" src="views/app/images/batalla.png"></a>
						<p>Compite contra otros Freestylers, a medida que batalles, ganarás experiéncia y subirás tu nivel, pudiendo así, desbloquear nuevos objetivos para alcanzar la glória. <b>¡Empieza ya!</b></p>
			</div>

			<div class="service1">
				<h1 class="servH">Torneo de Entrenamiento</h1>
					<a href=""><img class="image" src="views/app/images/torneo-entrenamiento.png"></a>
						<p>Entrena en un torneo contra otros Freestylers, <b>recuerda</b>, que este es un torneo de entramiento, y solo obtendrás recompensa de experiencia en nivel.</p>
			</div>

			<div class="service1">
				<h1 class="servH">Torneo de Competición</h1>
					<a href=""><img class="image" src="views/app/images/torneo-competicion.png"></a>
						<p>¡Apúntate a competir!<br>El torneo online más grande de todos los tiempos, inscríbete y compite a nivel mundial, consígue la victória y llévate premio. <a href="">Más información</a>.</p>
			</div>
		</div>
		<div id="modal-log" class="modal">
  
		  <form class="modal-content animate" action="validar.php" method="post" enctype="application/x-www-form-urlencoded">
		        
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('modal-log').style.display='none'" class="close" title="Close">&times;</span>
		      <h1 class="login-modal" style="text-align:center">Acceso</h1>
		    </div>

		    <div class="container">
		      <input type="text" id placeholder="Usuario" name="user" required>
		      <input type="password" placeholder="Contraseña" name="pswd" required>        
		      <button type="submit">Entrar</button>
		      <input type="checkbox" style=" margin-left: 20px; padding-right: 10px;">Recordarme.   
		      <a class="fpass" href="#" style="text-decoration:none; font-size: 12px; float:right; padding-right: 50px; margin-top: 30px;">¿Olvidaste tu Contraseña?</a>
		    </div>
		    
		  </form>
  
		</div>

		<div id="modal-reg" class="modal">
  
		  <form class="modal-content animate" action="insertar.php" method="post" enctype="application/x-www-form-urlencoded">
		        
		    <div class="imgcontainer">
		      <span onclick="document.getElementById('modal-reg').style.display='none'" class="close" title="Close">&times;</span>
		      <h1 class="reg-modal" style="text-align:center">Registro</h1>
		    </div>

		    <div class="container">
		      <input type="text" id placeholder="Usuario" name="user" required>
		      <input type="email" id placeholder="Correo Electrónico" name="email" required>
		      <input type="password" placeholder="Contraseña" name="pswd" required>        
		      <button type="submit">Registrar</button>
		        
		      <a class="login" onclick="" style="cursor:pointer; text-decoration:none; font-size: 12px; float:right; padding-right: 50px; margin-top: 30px;">Acceder</a>
		    </div>
		    
		  </form>
  
		</div>


	<?php include(HTML_DIR . 'overall/footer.php'); ?>
	
	</body>
</html>



