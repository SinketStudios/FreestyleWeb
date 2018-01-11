
<!DOCTYPE html>
<html lang="es">
<head>
	<?php session_start(); ?>
	
	<script type="text/javascript" src="views/app/js/jQuery/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="views/app/js/login.js">
	<link rel="stylesheet" type="text/css" href="views/app/js/register.js">
	<link rel="stylesheet" type="text/css" href="views/app/css/topnav.css">
	<link rel="stylesheet" type="text/css" href="views/app/css/index.css">
	<link rel="stylesheet" type="text/css" href="views/app/css/footer.css">
	<link rel="icon" href="views/app/images/favicon.png">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	  "palette": {
	    "popup": {
	      "background": "#000000"
	    },
	    "button": {
	      "background": "#f1d600"
	    }
	  },
	  "showLink": false,
	  "theme": "classic",
	  "type": "opt-in",
	  "content": {
	  	"message": "Esta página utiliza cookies para asegurar que obtiene la mejor experiencia en la web.",
	    "dismiss": "Rezchazar",
	    "allow": "Aceptar"
	    
	  }
	})});
	</script>

	<title><?php echo APP_TITLE_INDEX; ?></title>
</head>
