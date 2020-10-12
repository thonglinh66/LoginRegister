<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("user", $_POST['username'], $_POST['password']) == "error") {
            echo "Username or Password wrong";
        } else{ echo $db->logIn("user", $_POST['username'], $_POST['password']);
            $_SESSION["username"] = $_POST['username'];
        }
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
