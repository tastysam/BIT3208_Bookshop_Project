<?php

$conn = mysqli_connect("localhost", "root", "", "bookshop_db");

if(!$conn){
    die("Connection Failed");
}

echo "Database Connected Successfully";

?>