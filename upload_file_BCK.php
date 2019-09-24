<?php
 
 $dni=$_POST['dni'];
 //echo "dni:".$dni;

 if (is_uploaded_file($_FILES['dni_pdf']['tmp_name'])) {

 	if ($_FILES['dni_pdf']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {
 		$name = $_POST['dni_pdf'];
 		$result = move_uploaded_file($_FILES['dni_pdf']['tmp_name'], "alumnos/dni"."/".$dni."_dni.pdf");
 		if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";
	} #endIF
 } else
 echo "no subio el temp";
  if (is_uploaded_file($_FILES['inscripcion_pdf']['tmp_name'])) {

 	if ($_FILES['inscripcion_pdf']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {
 		$name = $_POST['inscripcion_pdf'];
 		$result = move_uploaded_file($_FILES['inscripcion_pdf']['tmp_name'], "alumnos/solicitudes_inscripciones"."/".$dni."_solicitud_inscripcion.pdf");
 		if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";
	} #endIF
 } else
 echo "no subio el temp";
  if (is_uploaded_file($_FILES['analitico_pdf']['tmp_name'])) {

 	if ($_FILES['analitico_pdf']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {
 		$name = $_POST['analitico_pdf'];
 		$result = move_uploaded_file($_FILES['analitico_pdf']['tmp_name'], "alumnos/analiticos"."/".$dni."_titulo_analitico.pdf");
 		if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";
	} #endIF
 } else
 echo "no subio el temp";
?>