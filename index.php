<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/> -->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>


<!-- <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script> -->

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>


<title>Inclusão e Acessibilidade</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,500,600,700,800,300" rel="stylesheet" />
<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--<link rel="stylesheet" href="css/index.css"> -->
</head>
<body>
    <?php
		include ("i_menu.php");
	?>
	<div id="mapid" style="width: 1900px; height: 600px;"></div>
		<script>
			var mymap = L.map('mapid').setView([-22.9064, -47.0616], 13);

			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWxib3JkaWdub24iLCJhIjoiY2l0MzFlZXdzMHRyNjJvcGdnY2txZXdsMCJ9.IOAXYE1_mrHHHUbVMxR59Q', {
				attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
				maxZoom: 18,
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1,
			}).addTo(mymap);

			//Versão que parou de funcionar. 
			// L.tileLayer('https://api.tiles.mapbox.com/v1/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoic3VzYW5mcmFuY2FsYXNzaSIsImEiOiJja2tpYm16bXgwbzd2MnVxOW5reWw4ZXdwIn0.9lJuJEeTkzelKqiO_VBxxg', {
			// 	maxZoom: 18,
			// 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			// 		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			// 		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			// 	id: 'mapbox.streets'
			// }).addTo(mymap);

			 L.marker([-22.9096241, -47.0594103]).addTo(mymap)
				.bindPopup("<b>Olá!</b><br />Você está aqui.").openPopup();


			var popup = L.popup();

			function onMapClick(e) {
				popup
					.setLatLng(e.latlng)
					.setContent("You clicked the map at " + e.latlng.toString())
					.openOn(mymap);
			}

			mymap.on('click', onMapClick);

		</script>
	<div id="banner"></div>
	<center>
	<div id="pageindex" class="container">
		<div id="content">
			<div class="title">
				<h2>Descrição</h2>
			</div>
			<p>Acima está um mapa via satélite da região de Campinas, dando enfoque principalmente na Avenida Francisco Glicério, que se localiza no centro da cidade. Neste mapa as rua se encontram marcadas pela cor branca e em cima seus respectivos nomes; regiões não asfaltadas estão em tons de verde; rios e lagos em azul; e as quadras e casas em tons de marrom</p>
		</div>
	</center>	
	</div>
</div>
	
    <?php
		include ("i_rodape.php");
	?>