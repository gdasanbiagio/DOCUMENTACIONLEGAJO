<?php
 
 $dni=$_POST['dni'];
 //$return=false;
 //echo "dni:".$dni;
if (is_uploaded_file($_FILES['certificado_medico']['tmp_name'])) {

 	/*if ($_FILES['certificado_medico']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {*/
 		$name = $_POST['certificado_medico'];
 		$target_file = $target_dir . basename($_FILES["certificado_medico"]["name"]);
 		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 		$result = move_uploaded_file($_FILES['certificado_medico']['tmp_name'], "alumnos/certificado_medico"."/".$dni.".".$imageFileType);
 		/*if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";*/
	/*}*/ #endIF
 } else
 $result=false;

 if (is_uploaded_file($_FILES['foto_perfil']['tmp_name'])) {

 	/*if ($_FILES['foto_perfil']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {*/
 		$name = $_POST['foto_perfil'];
 		$target_file = $target_dir . basename($_FILES["foto_perfil"]["name"]);
 		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 		//$dni="aaa.".$_FILES['foto_perfil']['type'];
 		$result = move_uploaded_file($_FILES['foto_perfil']['tmp_name'], "alumnos/foto_perfil"."/".$dni.".".$imageFileType);
 		/*if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";*/
	/*}*/ #endIF
 } else
 $result=false;

 if (is_uploaded_file($_FILES['dni_pdf']['tmp_name'])) {

 	if ($_FILES['dni_pdf']['type'] != "application/pdf") {
 		echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {
 		$name = $_POST['dni_pdf'];
 		$result = move_uploaded_file($_FILES['dni_pdf']['tmp_name'], "alumnos/dni"."/".$dni.".pdf");
 		/*if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";*/
	} #endIF
 } else
 $result=false;
  
  if (is_uploaded_file($_FILES['inscripcion_pdf']['tmp_name'])) {

 	if ($_FILES['inscripcion_pdf']['type'] != "application/pdf") {
 		//echo "<p>Class notes must be uploaded in PDF format.</p>";
 		$result=false;
 	} else {
 		$name = $_POST['inscripcion_pdf'];
 		$result = move_uploaded_file($_FILES['inscripcion_pdf']['tmp_name'], "alumnos/solicitudes_inscripciones"."/".$dni.".pdf");
 		/*if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";*/
	} #endIF
 } else
 $result=false;
  if (is_uploaded_file($_FILES['analitico_pdf']['tmp_name'])) {

 	if ($_FILES['analitico_pdf']['type'] != "application/pdf") {
 		$result=false;//echo "<p>Class notes must be uploaded in PDF format.</p>";
 	} else {
 		$name = $_POST['analitico_pdf'];
 		$result = move_uploaded_file($_FILES['analitico_pdf']['tmp_name'], "alumnos/analiticos"."/".$dni.".pdf");
 		/*if ($result == 1) 
 			echo "<p>Upload done .</p>";
 		else 
 			echo "<p>Sorry, Error happened while uploading . </p>";*/
	} #endIF
 } else
 $return=false;

 return $result;
?>