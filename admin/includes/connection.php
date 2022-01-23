<?php

$host = "localhost";
$user = "root";
$password = "";
$db="farma";

$connection = mysqli_connect($host,$user,$password);
mysqli_select_db($connection,$db);
