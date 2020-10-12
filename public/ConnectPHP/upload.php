<?php

    $conn=new mysqli("localhost","id15039655_thonglinh66","0702940957lL?","id15039655_ttnm");
    
    if($conn){
    }
    else{
    }
 
  
$username = $_POST['username'];
    $title = $_POST['title'];
    $descrip = $_POST['descrip'];
    $address = $_POST['address'];
	$file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];   
            $src = dirname(__FILE__) . "/img/".$file_name;
           
          $ok =    move_uploaded_file($file_tmp,$src);
          if($ok == true){
               echo("Successful" );
          }else{
              echo("Upload Field");
          }
   


	
 
    
  
    
    $date = date("Y-m-d");
    
   
   
    $conn->query("INSERT INTO report (username_emp , title, address, description, status, image, createreport ) VALUES ('".$username."','".$title."','".$address."','".$descrip."','0','".$file_name."','".$date."' )");


  
    
  

?>
  

