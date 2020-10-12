<?php

    $conn=new mysqli("localhost","id15039655_thonglinh66","0702940957lL?","id15039655_ttnm");
    
    if($conn){
    }
    else{
    }
 
  
$username = $_POST['username'];
  $conn->query("UPDATE notification SET checkkey = '1' WHERE username = '".$username."'");