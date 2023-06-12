<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="../Estilo/Estilo_elementos.css" rel="stylesheet" type="text/css">
	<link href="../Estilo/Estilo_para_todas.css" rel="stylesheet" type="text/css">
	<link href="../Estilo/Estilo_formulario.css" rel="stylesheet" type="text/css">
	<title>Formulario Marcos Baeza González</title>
</head>

<body>
<div id="form">
	<p>
		<a href="../index.html"><img src="../Recursos/iconoca.png"id="icono"></img>Volver a inicio</a>
	</p>
	<p>
		Estos son tus datos personales:
	</p>
	<table id="paraphp">
		<tr>
			<td>Nombre</td>
			<td>
				<?php
					echo  $_POST['nombre']. ' ' . $_POST['apellidos'] ;
				?>
			</td>
		</tr>
			<td>Sexo</td>
			<td>
				<?php
					echo  $_POST['sexo'] ;
				?>
			</td>
		<tr>
			<td>Correo Electronico</td>
			<td>
				<?php
					if (isset($_POST['correo_elec']) && $_POST['correo_elec'] !="") {
						echo  $_POST['correo_elec'] ;
					}
					else{
						echo 'No indicado';
					}
				?>
			</td>
		</tr>
		<tr>
			<td>¿Podemos enviarte?</td>
			<td>
				<?php
					if (isset($_POST['1']) && isset($_POST['2'])) {
					echo 'Ofertas y novedades';
					} 
					else if(isset($_POST['1'])){
							echo 'Solo ofertas';
						}
						else if(isset($_POST['2'])){
							echo 'Solo novedades' ;
						}
						else{
							echo 'Ninguna';
						}
				?>
			</td>
		</tr>
		<tr>
			<td>Opinión</td>
			<td>
				<?php
					if (isset($_POST['opinion']) && $_POST['opinion'] !="") {
						echo  'Gracias por ayudarnos a mejorar nuestra pagina web, tu opinion nos importa';
					}
					else{
						echo 'No indicada';
					}
				?>
			</td>
		</tr>
	</table>
	
	
	<p>
		<a href="../index.html"><img src="../Recursos/iconoca.png"id="icono"></img>Volver a inicio</a>
	</p>
</div>
</body>
</html>