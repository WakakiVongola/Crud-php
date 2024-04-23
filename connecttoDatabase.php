<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'crudphp';

    //create connexion
    $conn = mysqli_connect($host, $username, $password, $database);
    
   //check connexion
    if(!$conn){
        die('Connection failed: '.mysqli_connect_error());
    }
    // else{echo 'Connected successfully';}
