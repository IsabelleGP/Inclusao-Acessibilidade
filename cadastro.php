
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta  charset="utf-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
			<title>Cadastro</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
		<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
		<!--<link rel="stylesheet" type="text/css" href="Inclusao-Acessibilidade/cadastro.css"> -->

	</head>

	<body>
		<?php include("i_menu.php"); ?>

		<br/>

		<form class="formulario" >
			
		<center>

			<fieldset>
			<h1>Cadastro</h1>

				<br/>
				<br/>

				<label>Nome:</label>
				<br/>
				<input type="text" class="form-control" id="nome"  size="30px">

				<br/>
				<br/>

				<label>Sobrenome:</label>
				<br/>
				<input type="text" class="form-control" id="sobrenome"  size="30px">
		
				<br/>
				<br/>

				<label>Email:</label>
				<br/>
				<input type="email" class="form-control" id="email"  size="30px">

				<br/>
				<br/>
		
				<label>Senha:</label>
				<br/>
				<input type="password" class="form-control" id="senha" size="30px">
		
				<br/>
				<br/>
		
				<label>Sexo:</label>
				<br/>
				<select class="form-control" id="Sexo">
					
					<option value="1">Masculino</option>
					<option value="2">Feminino</option>
				</select>

				<br/>
				<br/>
				
				<label>Tipo de deficiência:</label>
				<br/>
				<select class="form-control" id="TipoDef">
					<option value="">Física</option>
					<option value="">Visual</option>
					
				</select>

				<br/>
				<br/>

			<input type="submit" name="enviar"class="btn btn-primary" formmethod="get" action="recebeDados.php" >
			
			<input type="reset" name="cancelar" class="btn btn-danger" value="Cancelar">
		</center>
 
			</fieldset>
		</form>

		<?php include ("i_rodape.php"); ?>

	</body>

</html>
