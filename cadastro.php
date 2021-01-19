
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
		<?php 
			include("i_menu.php"); 
		?>

		<br/>

			
		<center>


			<h1>Cadastro</h1>

				<br/>
				<br/>

				<form name = "cadastro" action="recebeDados.php" method="post">
					<label>Nome:</label> 
					<input type="text" name="nome" maxlength="30" size="30"/><br><br>
					
					Sobrenome: 
					<input type="text" name="sobrenome" maxlength="30" size="30"/><br><br>

					Email: 
					<input type="email" name="email" maxlength="30" size="20"/><br><br>
					
					Senha: 
					<input type="password" name="senha" maxlength="30" size="10"/><br><br>
							
					<label>Tipo de deficiência:</label>
					<br/>
					
						<select class="form-control" id="tipo_def" name="tipo_def">
							<option value="fisica">Física</option>
							<option value="visual">Visual</option>
						</select>
					<br/>
					<br/>
					<label>Sexo:</label> 
					<select class="form-control" id="sexo" name="sexo">
						<option value="masculino">Masculino</option>
						<option value="feminino">Feminino</option>
					</select>
							
					<br/>
					<br/>
					<input type="submit" name="enviar">
					<input type="reset" name="cancelar">
				</form>

				<br/>
				<br/>

		</center>

	<?php 
		include ("i_rodape.php"); 
	?>

	</body>

</html>
