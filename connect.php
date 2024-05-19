<?php
    $Fname = $_POST['Fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','signup');
    if($conn->connect_errno){
        die('Connection Failed : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("Insert into registration(Fname, email, password) values(?, ?, ?)");
        $stmt->bind_param("sss",$Fname, $email, $password);
        $stmt->execute();
        echo "regestration sucessful...";
        $stmt->close();
        $conn->close();
    }
?>