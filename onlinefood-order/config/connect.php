<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "onfood";
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
if (!$con) {
    die("Error!" . mysqli_connect_error());
}

?>