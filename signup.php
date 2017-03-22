<?php
    
    $serverName = "localhost";
    $mysqlUsername = "root";
    $mysqlPassword = "";
    $mysqlDb = "users";

    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashPassword = hash("sha256", $password);
    
    $conn = mysqli_connect($serverName, $mysqlUsername, $mysqlPassword, $mysqlDb);

    $query = "insert into usercredential values ('" . mysqli_escape_string($conn, $username) . "','" . mysqli_escape_string($conn, $hashPassword) . "')";

    if(mysqli_query($conn, $query)){
        header("Location: http://localhost/verifica/index.php");
        exit();
    }
    else{
        echo "Fallito";
    }
?>