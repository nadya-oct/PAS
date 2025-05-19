<?php
$host = "localhost";      
$username = "root";       
$password = "";           
$database = "db_pas"; 

    $connect = mysqli_connect("localhost", "root","", $database);
    if (!$connect)
    die("Koneksi gagal: " . mysqli_connect_error());
    
?>