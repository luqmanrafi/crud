<?php

$username = "root";
$password = "";
$hostname = "localhost";
$db= mysqli_connect($hostname,$username,$password);
mysqli_select_db($db,"data");

$nim = $_GET['nim'];
$query = "SELECT * FROM mhs";
$hasil = mysqli_query($db, $query);
$data = mysqli_fetch_array($hasil);


?>