<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Envio de datos url</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2>Recepción de datos por url</h2>
<?php

$espanol=<<<ESPANOL
	<p>Enero es el primer mes del año en el calendario gregoriano y tiene 31 días. Toma su nombre del dios Jano, del latín Janus, representado con dos caras, el espíritu de las puertas y del principio y el final.</p>
ESPANOL;
$ingles=<<<INGLES
	<P>January is the first month of the year in the Gregorian calendar is 31 days. Named after the god Janus, the Latin Janus, depicted with two faces, the spirit of the doors and the beginning and end.</P>
INGLES;
$frances=<<<FRANCES
	<P>Janvier est le premier mois de l´année dans le calendrier grégorien est 31 jours. Nommé d´après le dieu Janus, le Janus latine, représenté avec deux visages, l´esprit des portes et le début et la fin.</P>
FRANCES;
	
//$nombre='';


	$id=$_GET['id'];		
	if($id=='espanol')echo $espanol;
	if($id=='ingles')echo $ingles;
	if($id=='frances')echo $frances;
	
	
?>
</div>
</body>
</html>
