<?php 

$mail='info@hospitalviedma.org'; 

  
$nombre = $_POST['name']; 
$email = $_POST['email'];
$asunto = $_POST['asunto'];  
$msg = $_POST['mensaje']; 
$thank="/"; 

$message = " 
nombre:".$nombre." 
email:".$email." 
asunto:".$asunto."
mensaje:".$msg.""; 
   
  if (mail($mail,"consulta",$message))  
       Header ("Location: $thank"); 
   
 ?>