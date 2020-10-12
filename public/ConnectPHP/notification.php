<?php

    $conn=new mysqli("localhost","id15039655_thonglinh66","0702940957lL?","id15039655_ttnm");
    
    if($conn){
    }
    else{
    }
 
  
$username = $_POST['username'];
 $result = $conn->query("SELECT *  FROM notification  WHERE username = '".$username."'");
   if($result->num_rows>0)
            {
                $reports=array();
                while($row=$result->fetch_array())
                {
                    array_push($reports, array("id"=>$row['id'],"username"=>$row['username'], "status"=>$row['status'],"checkkey"=>$row['checkkey']));
                }
                echo (json_encode(array_reverse($reports)));
            }else
            {
                echo (json_encode(array("PHP EXCEPTION : CAN'T RETRIEVE FROM MYSQL. ")));
            }
?>