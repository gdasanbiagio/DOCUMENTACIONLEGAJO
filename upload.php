<?php
$target_dir = "/alumnos/prueba/";
/*$target_file = $target_dir . basename($_FILES["dni_pdf"]["name"]);
$uploadOk = 1;
$aaaFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));*/
// Check if aaa file is a actual aaa or fake aaa
/*
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
echo "tipo:$aaaFileType";

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
*/

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if($_FILES["aaa"]["error"] == 0){
    echo "subio";
}

if(isset($_FILES["aaa"])){
    echo "ntro";
      $errors= array();
      $file_name = $_FILES['aaa']['name'];
      $file_size =$_FILES['aaa']['size'];
      $file_tmp =$_FILES['aaa']['tmp_name'];
      $file_type=$_FILES['aaa']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['aaa']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"aaas/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   echo "fin antes";


?>