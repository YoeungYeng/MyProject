<?php 
        $server = "localhost";
        $userName = "root";
        $password = "";
        $db_name = "db_rupp";
       
        $conn = new mysqli($server, $userName, $password, $db_name);

       
        
        // insert to database
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO tbl_staff VALUES(null, '$firstName', '$lastName', '$phone')";
        $conn->query($sql);
        if($sql){
            echo "Insert to succesful";
        }else{
            echo "Error to"; 
        }

?>