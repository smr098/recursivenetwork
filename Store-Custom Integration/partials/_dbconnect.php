<?php
$server = "sql312.epizy.com";
$username = "epiz_29684768";
$password = "bUITXR59MrhXx9o";
$database = "epiz_29684768_registerationtest";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>