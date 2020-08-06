<! DOCTYPE html>

<html lang='eng' >

	<head>
		<title>Protótipo UDM | May 2020
		</title>

		<meta charset='utf-8' >
		<meta http-equiv='X-UA-Compatuble' content='IE=edge' >
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0' >

		<!-- bootstrap -->
<!--	<link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' >	-->
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" >

		<!-- CSS Style -->
		<link href='home.less' rel='stylesheet' type='text/less' >

		<!-- Fonts & local fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" >
		<link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet" >

		<!-- fontawesome -->
		<link href='fontawesome/css/font-awesome.min.css' rel='stylesheet' >

		<script src='jquery-1.11.3.min.js' type="text/javascript" ></script>

		<!-- components -->

		<!-- header -->
		<link href='components/header/header.less' rel='stylesheet' type="text/less" >
		<script src='components/header/header.js' type="text/javascript" ></script>

		<!-- footer -->
		<link href='components/footer/footer.less' rel='stylesheet' type="text/less" >
		<script src='components/footer/footer.js' type="text/javascript" ></script>

		<!-- valores -->
		<link href='components/valores/valores.less' rel='stylesheet' type="text/less" >
		<script src='components/valores/valores.js' type="text/javascript" ></script>

		<!-- centro -->
		<link href='components/centro/centro.less' rel='stylesheet' type="text/less" >
		<script src='components/centro/centro.js' type="text/javascript" ></script>

		<!-- parte_superior -->
		<link href='components/parte_superior/parte_superior.less' rel='stylesheet' type="text/less" >
	<!--	<script src='components/parte_superior/parte_superior.js' type="text/javascript" ></script>	-->

		<!-- parte_central -->
		<link href='components/parte_central/parte_central.less' rel='stylesheet' type="text/less" >
		<script src='components/parte_central/parte_central.js' type="text/javascript" ></script>
		<!-- (end) centro -->

		<!-- map -->
		<link href='components/map/map.less' rel='stylesheet' type="text/less" >
<!--	<script src='components/map/map.js' type="text/javascript" ></script>	-->

		<!-- contactos -->
		<link href='components/contactos/contactos.less' rel='stylesheet' type="text/less" >
<!--	<script src='components/contactos/contactos.js' type="text/javascript" ></script>	-->

		<!-- (end) components -->

		<script src='less.js' type="text/javascript" ></script>

		<!-- vuejs -->
		<script src="vuejs.js" type="text/javascript" ></script>

	</head>

	<body>
		<?php include("components/header/header.html"); ?>

		<?php include("components/valores/valores.html"); ?>

		<?php include("components/centro/centro.php"); ?>

		<?php // include("components/map/map.html"); ?>

		<?php // include("components/contactos/contactos.html"); ?>

		<?php include("components/footer/footer.html"); ?>

		<script type="text/javascript" src="bootstrap/jq/bootstrap.min.js" ></script>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" ></script>
    	
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" ></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" ></script>

	</body>
</html>