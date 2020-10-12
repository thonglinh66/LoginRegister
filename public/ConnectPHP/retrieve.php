<?php

class Constants
{
    //DATABASE DETAILS
    static $DB_SERVER="localhost";
    static $DB_NAME="id15039655_ttnm";
    static $USERNAME="id15039655_thonglinh66";
    static $PASSWORD="0702940957lL?";

    //STATEMENTS
    static $SQL_SELECT_ALL="SELECT * FROM report WHERE status = '2'";

}

class Reports
{
    /*******************************************************************************************************************************************/
    /*
       1.CONNECT TO DATABASE.
       2. RETURN CONNECTION OBJECT
    */
    public function connect()
    {
        $con=new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,Constants::$DB_NAME);
        if($con->connect_error)
        {
            // echo "Unable To Connect"; - For debug
            return null;
        }else
        {
            //echo "Connected"; - For debug
            return $con;
        }
    }
    /*******************************************************************************************************************************************/
    /*
       1.SELECT FROM DATABASE.
    */
    public function select()
    {
        $con=$this->connect();
        if($con != null)
        {
            $result=$con->query(Constants::$SQL_SELECT_ALL);
            if($result->num_rows>0)
            {
                $reports=array();
                while($row=$result->fetch_array())
                {
                    array_push($reports, array("id"=>$row['id'],"name_emp"=>$row['username_emp'],"name_tech"=>$row['username_tech'],
                    "title"=>$row['title'],"address"=>$row['address'],"description"=>$row['description'],"status"=>$row['status'],
                    "image_url"=>$row['image'],"create"=>$row['createreport'],"solve"=>$row['solve'],"completed"=>$row['completed'],"solution"=>$row['solution']));
                }
                print(json_encode(array_reverse($reports)));
            }else
            {
                print(json_encode(array("PHP EXCEPTION : CAN'T RETRIEVE FROM MYSQL. ")));
            }
            $con->close();

        }else{
            print(json_encode(array("PHP EXCEPTION : CAN'T CONNECT TO MYSQL. NULL CONNECTION.")));
        }
    }
}
$reports=new Reports();
$reports->select();