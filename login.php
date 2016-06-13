<?php
// create connection
    $url = "localhost";
    $username = "";
    $password = "";
    $database = "myWedding";
    $con = mysqli_connect($url,$username,$password,$database);
    
    if(!$con){
        echo "Error connecting to database" . mysqli_connect_error());
    }
    
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    //create function to check for login
?>