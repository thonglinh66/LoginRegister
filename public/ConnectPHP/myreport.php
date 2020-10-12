<?php

    $conn=new mysqli("localhost","id15039655_thonglinh66","0702940957lL?","id15039655_ttnm");
    
    if($conn){
    }
    else{
    }
 
  
$username = $_POST['username'];

 $result = $conn->query("SELECT * FROM report WHERE username_emp = '".$username."'");
   if($result->num_rows>0)
            {
                $reports=array();
                while($row=$result->fetch_array())
                {
                    array_push($reports, array("id"=>$row['id'],"name_emp"=>$row['username_emp'],"name_tech"=>$row['username_tech'],
                    "title"=>$row['title'],"address"=>$row['address'],"description"=>$row['description'],"status"=>$row['status'],
                    "image_url"=>$row['image'],"create"=>$row['createreport'],"solve"=>$row['solve'],"completed"=>$row['completed'],"solution"=>$row['solution']));
                }
                echo (json_encode(array_reverse($reports)));
            }else
            {
                echo (json_encode(array("PHP EXCEPTION : CAN'T RETRIEVE FROM MYSQL. ")));
            }