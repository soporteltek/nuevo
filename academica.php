<?php
		date_default_timezone_set("America/Santiago");   
		include_once('conexionli.php'); 
?>
<!doctype html>
 
<html lang="es">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" 	content="Liceo Tecnológico Enrique Kirberg" />
	<meta name="keywords" 		content="Liceo, Polivalente, CODEDUC, Maipú" />
	<meta name="author" 		content="metatags generator">
	<meta name="robots" 		content="índice, siga" />
	<meta name="revisit-after" 	content="3 mes" />
	
	<link rel="shortcut icon" href="favicon.ico" />
	<title>Liceo Tecnológico Bicentenario Enrique Kirberg</title>
	<link href="css/menu.css" 		rel="stylesheet" type="text/css" />
	<link href="css/estilopie.css" 	rel="stylesheet" type="text/css" />
<!-- 	<link href="css/estiloPhp.php" 	rel="stylesheet" type="text/css" /> -->
	<link href="css/estilos.css" 	rel="stylesheet" type="text/css" />

<!--  Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  	<script src="angularjs/angular.min.js"></script>


	<link rel="apple-touch-icon" href="recursos/touch-icon-iphone.png" />
	<link rel="apple-touch-icon" href="recursos/touch-icon-ipad.png" />
	<link rel="apple-touch-icon" href="recursos/touch-icon-iphone4.png" />

	<script>
		$(document).ready(function(){
			$('.toast').toast('show');
		});
	</script>


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-35740548-1', 'auto');
	  ga('send', 'pageview');
	
	</script>




</head>

<body  OnLoad="NoBack();" ng-app>

	<div ng-include="'menuNavegacion.php'"></div>
	<div ng-include="'headPrincipal.php'"></div> 

	<?php include_once("cuerpoAcademica.php");?>
	<?php include("pie2.php");?>
</body>
</html>