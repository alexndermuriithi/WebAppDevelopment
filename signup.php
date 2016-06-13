<?php
// create connection
    $url = "localhost";
    $username = "";
    $password = "";
    $con = mysqli_connect($url,$username,$password);
    
    if(!$con){
        echo "Error connecting to database" . mysqli_connect_error());
    }
// create database
    $sql = "CREATE DATABASE myWedding";
    if(mysqli_query($con,$sql)){
        echo("Database successfully created");
    }
// create table    
    $con1 = mysqli_connect($url,$username,$password, "myWedding");
    $sql1 = "CREATE TABLE clients (ID INT UNSIGNED AUTO_INCREMENT, BridesName VARCHAR(15), GroomsName VARCHAR(15), Email VARCHAR(50) PRIMARY KEY, WeddindDate VARCHAR(15), Password VARCHAR(15))";
    if(mysqli_query($con1,$sql1)){
        echo "Table successfully created";
    }
// insert elements to table
    $bname = $_POST['bname'];
    $gname = $_POST['gname'];
    $email = $_POST['email'];
    $weddate = $_POST['weddate'];
    $pass = $_POST['pass'];
    $sql2 = "INSERT INTO clients (BridesName,GroomsName,Email,WeddindDate,Password) VALUES('$bname','$gname','$email','$weddate','$pass')";
    if(mysqli_query($con1,$sql2)){
        echo "Values successfully added to table";
    }
    mysqli_close($con);
    mysqli_close($con1);
?>