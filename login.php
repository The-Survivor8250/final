<?php
    /*$email = $_POST['email'];
    $password = $_POST['password'];

    //DataBase connection

    $conn = new mysqli('localhost','root','','signup');
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    } else{
        $stmt = $conn->prepare("SELECT * FROM `registration` WHERE email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
                if($data['password'] === $password) {
                echo "<h2> Login Sucessfully </h2>";
                } else {
                echo "<h2> invalid email or password </h2>";
            }
        }else{
            echo "<h2>Invalid Email or Password </h2>";
        }
    }    
?>*/
    
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from registration where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid email or password.</h1>";  
        }     
?>  