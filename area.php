<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta  charset="utf-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
			<title>Área do Usuário</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
		<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
		<!--<link rel="stylesheet" type="text/css" href="Inclusao-Acessibilidade/cadastro.css"> -->

	</head>

	<body>
		<?php 
			include("i_menu.php"); 
		?>

		<br/>

	<div id="page" class="container">		
		<div id="content">
			<center>
				<div class="title">
					<h2>Escolha: </h2>
				</div>
				<h1>É novo por aqui?</h1>
				<br/>
				<a href="../cadastro.php">Realizar Cadastro</a>
				<br/>
				<br/>
				<h1>Já nos conhece?</h1> 
				<a href="../atualizar.php">Atualizar Cadastro</a>
				<br/>
				<br/>
				<h1> Não tem certeza se já nos conhece?</h1>
				<a href="../pesquisar.php">Pesquisar Cadastro</a>
				<br/>
				<br/>
				<h1> Vai embora? :-( </h1>
				<a href="../excluir.php">Excluir Cadastro</a>

					
			</center>
		</div>
	</div>
	</div>

	<?php 
		include ("i_rodape.php"); 
	?>

